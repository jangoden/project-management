<?php

namespace App\Filament\Resources\WebsiteDesignCategories;

use App\Filament\Resources\WebsiteDesignCategories\Pages\CreateWebsiteDesignCategory;
use App\Filament\Resources\WebsiteDesignCategories\Pages\EditWebsiteDesignCategory;
use App\Filament\Resources\WebsiteDesignCategories\Pages\ListWebsiteDesignCategories;
use App\Filament\Resources\WebsiteDesignCategories\Schemas\WebsiteDesignCategoryForm;
use App\Filament\Resources\WebsiteDesignCategories\Tables\WebsiteDesignCategoriesTable;
use App\Models\WebsiteDesignCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class WebsiteDesignCategoryResource extends Resource
{
    protected static ?string $model = WebsiteDesignCategory::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-folder';

    protected static string | \UnitEnum | null $navigationGroup = 'Management Design';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return WebsiteDesignCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return WebsiteDesignCategoriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListWebsiteDesignCategories::route('/'),
            'create' => CreateWebsiteDesignCategory::route('/create'),
            'edit' => EditWebsiteDesignCategory::route('/{record}/edit'),
        ];
    }
}
