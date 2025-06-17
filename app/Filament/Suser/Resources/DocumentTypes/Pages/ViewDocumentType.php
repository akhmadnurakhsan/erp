<?php

namespace App\Filament\Suser\Resources\DocumentTypes\Pages;

use App\Filament\Suser\Resources\DocumentTypes\DocumentTypeResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewDocumentType extends ViewRecord
{
    protected static string $resource = DocumentTypeResource::class;

    use ViewPageWithDeleteTrait;
}
