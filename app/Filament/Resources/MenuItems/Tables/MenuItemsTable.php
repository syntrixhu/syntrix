<?php

namespace App\Filament\Resources\MenuItems\Tables;

use App\Models\MenuItem;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Validation\ValidationException;

class MenuItemsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(function (Builder $query): Builder {
                return $query
                    ->leftJoin(
                        'menu_items as parent_menu',
                        'menu_items.parent_id',
                        '=',
                        'parent_menu.id'
                    )
                    ->select('menu_items.*')

                    // Szülőmenü sorrendje
                    ->orderByRaw(
                        'COALESCE(parent_menu.sort_order, menu_items.sort_order) ASC'
                    )

                    // Azonos szülőhöz tartozó elemek együtt
                    ->orderByRaw(
                        'COALESCE(parent_menu.id, menu_items.id) ASC'
                    )

                    // Előbb a szülő, utána a gyerekek
                    ->orderByRaw(
                        'CASE WHEN menu_items.parent_id IS NULL THEN 0 ELSE 1 END ASC'
                    )

                    // Almenüpontok sorrendje
                    ->orderBy('menu_items.sort_order')
                    ->orderBy('menu_items.id');
            })

            ->columns([
                TextColumn::make('name')
                    ->label('Menüpont')
                    ->searchable()
                    ->formatStateUsing(
                        fn (string $state, MenuItem $record): string => $record->parent_id
                                ? '    ↳ '.$state
                                : $state
                    )
                    ->weight(
                        fn (MenuItem $record) => $record->parent_id ? 'normal' : 'bold'
                    )
                    ->color(
                        fn (MenuItem $record) => $record->parent_id ? 'gray' : 'primary'
                    ),

                TextColumn::make('parent.name')
                    ->label('Szülőmenü')
                    ->placeholder('Főmenü'),

                TextColumn::make('url')
                    ->label('Hivatkozás')
                    ->limit(40),

                IconColumn::make('is_active')
                    ->label('Aktív')
                    ->boolean(),
            ])
            ->filters([
                Filter::make('menu_group')
                    ->label('Menücsoport')
                    ->schema([
                        Select::make('parent')
                            ->label('Megjelenített menüpontok')
                            ->options(fn (): array => [
                                'all' => 'Összes menüpont',
                                'root' => 'Csak főmenüpontok',

                                ...MenuItem::query()
                                    ->whereNull('parent_id')
                                    ->orderBy('name')
                                    ->pluck('name', 'id')
                                    ->mapWithKeys(
                                        fn ($name, $id) => [
                                            (string) $id => $name.' almenüi',
                                        ]
                                    )
                                    ->all(),
                            ])
                            ->default('all')
                            ->searchable()
                            ->selectablePlaceholder(false),
                    ])
                    ->query(function (
                        Builder $query,
                        array $data
                    ): Builder {
                        $parent = $data['parent'] ?? 'all';

                        if ($parent === 'all') {
                            return $query;
                        }

                        if ($parent === 'root') {
                            return $query->whereNull('parent_id');
                        }

                        if (ctype_digit((string) $parent)) {
                            return $query->where(
                                'parent_id',
                                (int) $parent
                            );
                        }

                        return $query;
                    }),
            ])
            ->deferFilters(false)

            ->deferFilters(false)

            ->reorderable('sort_order')

            ->beforeReordering(function (array $order): void {
                $parentIds = MenuItem::query()
                    ->whereKey($order)
                    ->distinct()
                    ->pluck('parent_id')
                    ->map(fn ($id) => $id ?? 'root')
                    ->unique();

                if ($parentIds->count() > 1) {
                    throw ValidationException::withMessages([
                        'order' => 'Csak azonos szülőmenühöz tartozó elemek rendezhetők együtt.',
                    ]);
                }
            })

            ->reorderRecordsTriggerAction(
                fn (Action $action, bool $isReordering) => $action
                    ->button()
                    ->label(
                        $isReordering
                            ? 'Rendezés befejezése'
                            : 'Sorrend módosítása'
                    )
            )

            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])

            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
