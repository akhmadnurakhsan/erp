<?php

namespace App\Filament\Suser\Resources\MaterialGroups\Pages;

use App\Filament\Suser\Resources\MaterialGroups\MaterialGroupResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMaterialGroups extends ListRecords
{
    protected static string $resource = MaterialGroupResource::class;

    use ListPageTrait;
}
