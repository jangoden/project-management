<?php

namespace App\Filament\Resources\WebsiteDesigns\Pages;

use App\Filament\Resources\WebsiteDesigns\WebsiteDesignResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditWebsiteDesign extends EditRecord
{
    protected static string $resource = WebsiteDesignResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
