<?php

namespace App\Filament\Suser\Resources\ProcurementTypes\Pages;

use App\Filament\Suser\Resources\ProcurementTypes\ProcurementTypeResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateProcurementType extends CreateRecord
{
    protected static string $resource = ProcurementTypeResource::class;

    use CreatePageTrait;
}
