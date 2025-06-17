<?php

namespace App\Filament\Suser\Resources\IndustrySectors\Pages;

use App\Filament\Suser\Resources\IndustrySectors\IndustrySectorResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListIndustrySectors extends ListRecords
{
    protected static string $resource = IndustrySectorResource::class;

    use ListPageTrait;
}
