<?php

namespace App\Filament\Suser\Resources\MaterialTypes\Pages;

use App\Filament\Suser\Resources\MaterialTypes\MaterialTypeResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMaterialTypes extends ListRecords
{
    protected static string $resource = MaterialTypeResource::class;

    use ListPageTrait;
}
