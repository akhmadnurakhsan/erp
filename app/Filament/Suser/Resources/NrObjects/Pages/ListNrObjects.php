<?php

namespace App\Filament\Suser\Resources\NrObjects\Pages;

use App\Filament\Suser\Resources\NrObjects\NrObjectResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListNrObjects extends ListRecords
{
    protected static string $resource = NrObjectResource::class;

    use ListPageTrait;
}
