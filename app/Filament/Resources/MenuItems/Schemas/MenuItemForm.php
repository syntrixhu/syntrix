<?php

namespace App\Filament\Resources\MenuItems\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Builder;

class MenuItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('name')
                    ->label('Menüpont neve')
                    ->required()
                    ->maxLength(255),

                Select::make('parent_id')
                    ->label('Szülőmenüpont')
                    ->relationship(
                        name: 'parent',
                        titleAttribute: 'name',
                        modifyQueryUsing: fn (Builder $query) => $query->whereNull('parent_id'),
                        ignoreRecord: true,
                    )
                    ->searchable()
                    ->preload()
                    ->placeholder('Nincs - főmenüpont')
                    ->helperText('Válaszd ki, melyik főmenühöz tartozzon. Üresen hagyva önálló menüpont lesz.'),

                TextInput::make('url')
                    ->label('Hivatkozás')
                    ->required()
                    ->default('/')
                    ->maxLength(2048)
                    ->helperText('Például: /, /referenciak vagy /#kapcsolat'),

                Textarea::make('description')
                    ->label('Leírás')
                    ->rows(2)
                    ->maxLength(255),

                Select::make('icon')
                    ->label('Ikon')
                    ->options([
                        'website' => 'Weboldal-fejlesztés',
                        'app' => 'Webalkalmazások',
                        'code' => 'Egyedi fejlesztés',
                        'api' => 'API integráció',
                        'maintenance' => 'Karbantartás',
                        'seo' => 'SEO optimalizálás',
                        'shop' => 'Webáruház',
                        'database' => 'Adatbázis',
                        'server' => 'Tárhely és szerver',
                        'security' => 'Biztonság',
                        'mobile' => 'Mobilalkalmazás',
                        'design' => 'UI/UX tervezés',
                        'integration' => 'Rendszerintegráció',
                        'performance' => 'Teljesítményoptimalizálás',
                        'consulting' => 'Tanácsadás',
                        'cloud' => 'Felhőszolgáltatások',
                    ])
                    ->placeholder('Nincs ikon'),

                Toggle::make('is_active')
                    ->label('Aktív')
                    ->default(true),

            ]);
    }
}
