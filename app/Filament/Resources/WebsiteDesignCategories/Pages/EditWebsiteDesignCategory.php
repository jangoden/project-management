<?php

namespace App\Filament\Resources\WebsiteDesignCategories\Pages;

use App\Filament\Resources\WebsiteDesignCategories\WebsiteDesignCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditWebsiteDesignCategory extends EditRecord
{
    protected static string $resource = WebsiteDesignCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
