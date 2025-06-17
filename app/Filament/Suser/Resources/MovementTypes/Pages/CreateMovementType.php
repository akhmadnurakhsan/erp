<?php

namespace App\Filament\Suser\Resources\MovementTypes\Pages;

use App\Filament\Suser\Resources\MovementTypes\MovementTypeResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateMovementType extends CreateRecord
{
    protected static string $resource = MovementTypeResource::class;

    use CreatePageTrait;
}
