<?php

namespace App\Filament\Suser\Resources\Kodepos\Pages;

use App\Filament\Suser\Resources\Kodepos\KodeposResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKodepos extends ListRecords
{
    protected static string $resource = KodeposResource::class;

    use ListPageTrait;
}
