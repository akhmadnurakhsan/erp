<?php

namespace App\Filament\Suser\Resources\Statuses\Pages;

use App\Filament\Suser\Resources\Statuses\StatusResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStatuses extends ListRecords
{
    protected static string $resource = StatusResource::class;

    use ListPageTrait;
}
