<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MenuItem extends Model
{
    protected $fillable = [
        'parent_id',
        'name',
        'url',
        'description',
        'icon',
        'sort_order',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ];
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id')
            ->orderBy('sort_order')
            ->orderBy('id');
    }

    public function activeChildren(): HasMany
    {
        return $this->children()
            ->where('is_active', true);
    }

    public static function navigationTree()
    {
        return static::query()
            ->whereNull('parent_id')
            ->where('is_active', true)
            ->with('activeChildren')
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();
    }
}
