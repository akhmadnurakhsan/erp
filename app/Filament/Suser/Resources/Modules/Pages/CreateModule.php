<?php

namespace App\Filament\Suser\Resources\Modules\Pages;

use App\Filament\Suser\Resources\Modules\ModuleResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateModule extends CreateRecord
{
    protected static string $resource = ModuleResource::class;

    use CreatePageTrait;
}
