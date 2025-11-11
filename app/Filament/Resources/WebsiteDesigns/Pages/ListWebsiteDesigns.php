<?php

namespace App\Filament\Resources\WebsiteDesigns\Pages;

use App\Filament\Resources\WebsiteDesigns\WebsiteDesignResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListWebsiteDesigns extends ListRecords
{
    protected static string $resource = WebsiteDesignResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
