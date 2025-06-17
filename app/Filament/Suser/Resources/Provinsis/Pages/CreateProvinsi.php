<?php

namespace App\Filament\Suser\Resources\Provinsis\Pages;

use App\Filament\Suser\Resources\Provinsis\ProvinsiResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateProvinsi extends CreateRecord
{
    protected static string $resource = ProvinsiResource::class;

    use CreatePageTrait;
}
