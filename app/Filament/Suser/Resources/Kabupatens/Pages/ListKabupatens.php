<?php

namespace App\Filament\Suser\Resources\Kabupatens\Pages;

use App\Filament\Suser\Resources\Kabupatens\KabupatenResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKabupatens extends ListRecords
{
    protected static string $resource = KabupatenResource::class;

    use ListPageTrait;
}
