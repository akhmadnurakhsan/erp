<?php

namespace App\Filament\Suser\Resources\TaxClassifications\Pages;

use App\Filament\Suser\Resources\TaxClassifications\TaxClassificationResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditTaxClassification extends EditRecord
{
    protected static string $resource = TaxClassificationResource::class;

    use EditPageWithDeleteTrait;
}
