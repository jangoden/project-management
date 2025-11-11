<?php

namespace App\Filament\Resources\WebsiteDesigns;

use App\Filament\Resources\WebsiteDesigns\Pages\CreateWebsiteDesign;
use App\Filament\Resources\WebsiteDesigns\Pages\EditWebsiteDesign;
use App\Filament\Resources\WebsiteDesigns\Pages\ListWebsiteDesigns;
use App\Filament\Resources\WebsiteDesigns\Schemas\WebsiteDesignForm;
use App\Filament\Resources\WebsiteDesigns\Tables\WebsiteDesignsTable;
use App\Models\WebsiteDesign;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class WebsiteDesignResource extends Resource
{
    protected static ?string $model = WebsiteDesign::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-globe-alt';

    protected static string | \UnitEnum | null $navigationGroup = 'Management Design';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return WebsiteDesignForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return WebsiteDesignsTable::configure($table);
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
            'index' => ListWebsiteDesigns::route('/'),
            'create' => CreateWebsiteDesign::route('/create'),
            'edit' => EditWebsiteDesign::route('/{record}/edit'),
        ];
    }
}
