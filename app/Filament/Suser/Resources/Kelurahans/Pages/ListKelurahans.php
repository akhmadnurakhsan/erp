<?php

namespace App\Filament\Suser\Resources\Kelurahans\Pages;

use App\Filament\Suser\Resources\Kelurahans\KelurahanResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKelurahans extends ListRecords
{
    protected static string $resource = KelurahanResource::class;

    use ListPageTrait;
}
