<?php

namespace App\Filament\Suser\Resources\StatusGroups\Pages;

use App\Filament\Suser\Resources\StatusGroups\StatusGroupResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStatusGroups extends ListRecords
{
    protected static string $resource = StatusGroupResource::class;

    use ListPageTrait;
}
