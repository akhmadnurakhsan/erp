<?php

namespace App\Filament\Suser\Resources\Titles\Pages;

use App\Filament\Suser\Resources\Titles\TitleResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTitles extends ListRecords
{
    protected static string $resource = TitleResource::class;

    use ListPageTrait;
}
