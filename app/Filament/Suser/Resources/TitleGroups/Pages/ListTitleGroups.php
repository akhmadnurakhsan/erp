<?php

namespace App\Filament\Suser\Resources\TitleGroups\Pages;

use App\Filament\Suser\Resources\TitleGroups\TitleGroupResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTitleGroups extends ListRecords
{
    protected static string $resource = TitleGroupResource::class;

    use ListPageTrait;
}
