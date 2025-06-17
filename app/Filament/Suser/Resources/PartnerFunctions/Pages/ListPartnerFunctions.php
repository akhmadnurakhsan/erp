<?php

namespace App\Filament\Suser\Resources\PartnerFunctions\Pages;

use App\Filament\Suser\Resources\PartnerFunctions\PartnerFunctionResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPartnerFunctions extends ListRecords
{
    protected static string $resource = PartnerFunctionResource::class;

    use ListPageTrait;
}
