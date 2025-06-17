<?php

namespace App\Filament\Suser\Resources\PartnerFunctionGroups\Pages;

use App\Filament\Suser\Resources\PartnerFunctionGroups\PartnerFunctionGroupResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPartnerFunctionGroups extends ListRecords
{
    protected static string $resource = PartnerFunctionGroupResource::class;

    use ListPageTrait;
}
