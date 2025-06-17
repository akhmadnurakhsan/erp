<?php

namespace App\Filament\Suser\Resources\Kecamatans\Pages;

use App\Filament\Suser\Resources\Kecamatans\KecamatanResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateKecamatan extends CreateRecord
{
    protected static string $resource = KecamatanResource::class;

    use CreatePageTrait;
}
