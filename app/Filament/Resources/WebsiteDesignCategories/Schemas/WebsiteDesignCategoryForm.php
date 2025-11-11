<?php

namespace App\Filament\Resources\WebsiteDesignCategories\Schemas;

use App\Models\WebsiteDesignCategory;
use Filament\Forms;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class WebsiteDesignCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (string $operation, $state, \Filament\Schemas\Components\Utilities\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->disabled()
                    ->dehydrated()
                    ->unique(WebsiteDesignCategory::class, 'slug', ignoreRecord: true),
            ]);
    }
}
