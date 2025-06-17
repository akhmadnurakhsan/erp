<?php

namespace App\Filament\Suser\Resources\Kabupatens\Pages;

use App\Filament\Suser\Resources\Kabupatens\KabupatenResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateKabupaten extends CreateRecord
{
    protected static string $resource = KabupatenResource::class;

    use CreatePageTrait;
}
