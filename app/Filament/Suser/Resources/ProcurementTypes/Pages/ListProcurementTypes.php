<?php

namespace App\Filament\Suser\Resources\ProcurementTypes\Pages;

use App\Filament\Suser\Resources\ProcurementTypes\ProcurementTypeResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProcurementTypes extends ListRecords
{
    protected static string $resource = ProcurementTypeResource::class;

    use ListPageTrait;
}
