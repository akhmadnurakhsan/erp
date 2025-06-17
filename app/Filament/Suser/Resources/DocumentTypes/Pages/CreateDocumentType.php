<?php

namespace App\Filament\Suser\Resources\DocumentTypes\Pages;

use App\Filament\Suser\Resources\DocumentTypes\DocumentTypeResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateDocumentType extends CreateRecord
{
    protected static string $resource = DocumentTypeResource::class;

    use CreatePageTrait;
}
