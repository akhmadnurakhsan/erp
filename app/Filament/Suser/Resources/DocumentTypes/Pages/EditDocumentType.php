<?php

namespace App\Filament\Suser\Resources\DocumentTypes\Pages;

use App\Filament\Suser\Resources\DocumentTypes\DocumentTypeResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditDocumentType extends EditRecord
{
    protected static string $resource = DocumentTypeResource::class;

    use EditPageWithDeleteTrait;
}
