<?php

namespace App\Filament\Suser\Resources\BatchSources\Pages;

use App\Filament\Suser\Resources\BatchSources\BatchSourceResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBatchSources extends ListRecords
{
    protected static string $resource = BatchSourceResource::class;

    use ListPageTrait;
}
