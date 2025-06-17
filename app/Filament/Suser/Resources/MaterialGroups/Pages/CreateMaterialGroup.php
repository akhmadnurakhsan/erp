<?php

namespace App\Filament\Suser\Resources\MaterialGroups\Pages;

use App\Filament\Suser\Resources\MaterialGroups\MaterialGroupResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateMaterialGroup extends CreateRecord
{
    protected static string $resource = MaterialGroupResource::class;

    use CreatePageTrait;
}
