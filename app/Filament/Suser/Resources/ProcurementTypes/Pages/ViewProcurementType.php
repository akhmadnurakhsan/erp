<?php

namespace App\Filament\Suser\Resources\ProcurementTypes\Pages;

use App\Filament\Suser\Resources\ProcurementTypes\ProcurementTypeResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewProcurementType extends ViewRecord
{
    protected static string $resource = ProcurementTypeResource::class;

    use ViewPageWithDeleteTrait;
}
