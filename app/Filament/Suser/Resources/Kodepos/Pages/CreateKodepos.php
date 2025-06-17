<?php

namespace App\Filament\Suser\Resources\Kodepos\Pages;

use App\Filament\Suser\Resources\Kodepos\KodeposResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateKodepos extends CreateRecord
{
    protected static string $resource = KodeposResource::class;

    use CreatePageTrait;
}
