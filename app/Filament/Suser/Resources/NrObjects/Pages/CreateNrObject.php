<?php

namespace App\Filament\Suser\Resources\NrObjects\Pages;

use App\Filament\Suser\Resources\NrObjects\NrObjectResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateNrObject extends CreateRecord
{
    protected static string $resource = NrObjectResource::class;

    use CreatePageTrait;
}
