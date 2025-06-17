<?php

namespace App\Filament\Suser\Resources\SubModules\Pages;

use App\Filament\Suser\Resources\SubModules\SubModuleResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSubModules extends ListRecords
{
    protected static string $resource = SubModuleResource::class;

    use ListPageTrait;
}
