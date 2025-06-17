<?php

namespace App\Filament\Suser\Resources\Provinsis\Pages;

use App\Filament\Suser\Resources\Provinsis\ProvinsiResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProvinsis extends ListRecords
{
    protected static string $resource = ProvinsiResource::class;

    use ListPageTrait;
}
