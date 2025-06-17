<?php

namespace App\Filament\Suser\Resources\TitleTitleGroups\Pages;

use App\Filament\Suser\Resources\TitleTitleGroups\TitleTitleGroupResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTitleTitleGroups extends ListRecords
{
    protected static string $resource = TitleTitleGroupResource::class;

    use ListPageTrait;
}
