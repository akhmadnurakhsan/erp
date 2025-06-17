<?php

namespace App\Filament\Suser\Resources\MovementTypes\Pages;

use App\Filament\Suser\Resources\MovementTypes\MovementTypeResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMovementType extends ViewRecord
{
    protected static string $resource = MovementTypeResource::class;

    use ViewPageWithDeleteTrait;
}
