<?php

namespace App\Filament\Suser\Resources\Uoms\Pages;

use App\Filament\Suser\Resources\Uoms\UomResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListUoms extends ListRecords
{
    protected static string $resource = UomResource::class;

    use ListPageTrait;
}
