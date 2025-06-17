<?php

namespace App\Filament\Suser\Resources\SubModules\Pages;

use App\Filament\Suser\Resources\SubModules\SubModuleResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateSubModule extends CreateRecord
{
    protected static string $resource = SubModuleResource::class;

    use CreatePageTrait;
}
