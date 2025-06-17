<?php

namespace App\Filament\Suser\Resources\TitleTitleGroups\Pages;

use App\Filament\Suser\Resources\TitleTitleGroups\TitleTitleGroupResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateTitleTitleGroup extends CreateRecord
{
    protected static string $resource = TitleTitleGroupResource::class;

    use CreatePageTrait;
}
