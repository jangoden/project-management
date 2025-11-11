<?php

namespace App\Filament\Resources\WebsiteDesignCategories\Pages;

use App\Filament\Resources\WebsiteDesignCategories\WebsiteDesignCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListWebsiteDesignCategories extends ListRecords
{
    protected static string $resource = WebsiteDesignCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
