<?php

namespace App\Filament\Suser\Resources\TitleGroups\Pages;

use App\Filament\Suser\Resources\TitleGroups\TitleGroupResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateTitleGroup extends CreateRecord
{
    protected static string $resource = TitleGroupResource::class;

    use CreatePageTrait;
}
