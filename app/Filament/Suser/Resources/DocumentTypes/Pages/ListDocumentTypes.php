<?php

namespace App\Filament\Suser\Resources\DocumentTypes\Pages;

use App\Filament\Suser\Resources\DocumentTypes\DocumentTypeResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDocumentTypes extends ListRecords
{
    protected static string $resource = DocumentTypeResource::class;

    use ListPageTrait;
}
