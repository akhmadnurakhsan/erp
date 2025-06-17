<?php

namespace App\Filament\Suser\Resources\StatusStatusGroups\Pages;

use App\Filament\Suser\Resources\StatusStatusGroups\StatusStatusGroupResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStatusStatusGroups extends ListRecords
{
    protected static string $resource = StatusStatusGroupResource::class;

    use ListPageTrait;
}
