<?php

namespace App\Filament\Suser\Resources\Kelurahans\Pages;

use App\Filament\Suser\Resources\Kelurahans\KelurahanResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateKelurahan extends CreateRecord
{
    protected static string $resource = KelurahanResource::class;

    use CreatePageTrait;
}
