<?php

namespace App\Filament\Suser\Resources\PartnerFunctionPartnerFunctionGroups\Pages;

use App\Filament\Suser\Resources\PartnerFunctionPartnerFunctionGroups\PartnerFunctionPartnerFunctionGroupResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPartnerFunctionPartnerFunctionGroups extends ListRecords
{
    protected static string $resource = PartnerFunctionPartnerFunctionGroupResource::class;

    use ListPageTrait;
}
