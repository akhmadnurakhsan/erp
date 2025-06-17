<?php

namespace App\Filament\Suser\Resources\Modules\Pages;

use App\Filament\Suser\Resources\Modules\ModuleResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListModules extends ListRecords
{
    protected static string $resource = ModuleResource::class;

    use ListPageTrait;
}
