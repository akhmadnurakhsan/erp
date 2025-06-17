<?php

namespace App\Filament\Suser\Resources\MaterialTypes\Pages;

use App\Filament\Suser\Resources\MaterialTypes\MaterialTypeResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateMaterialType extends CreateRecord
{
    protected static string $resource = MaterialTypeResource::class;

    use CreatePageTrait;
}
