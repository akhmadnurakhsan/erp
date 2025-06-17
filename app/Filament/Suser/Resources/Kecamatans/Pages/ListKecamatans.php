<?php

namespace App\Filament\Suser\Resources\Kecamatans\Pages;

use App\Filament\Suser\Resources\Kecamatans\KecamatanResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKecamatans extends ListRecords
{
    protected static string $resource = KecamatanResource::class;

    use ListPageTrait;
}
