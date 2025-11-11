<?php

namespace App\Filament\Resources\WebsiteDesigns\Schemas;

use App\Models\WebsiteDesignCategory;
use Filament\Forms;
use Filament\Schemas\Schema;

class WebsiteDesignForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\Select::make('website_design_category_id')
                    ->label('Category')
                    ->relationship('websiteDesignCategory', 'name')
                    ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('url')
                    ->label('Website URL')
                    ->url()
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('banner_image')
                    ->image()
                    ->nullable()
                    ->disk('public'),
            ]);
    }
}
