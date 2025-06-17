<?php

namespace App\Filament\Suser\Resources\MovementTypes\Pages;

use App\Filament\Suser\Resources\MovementTypes\MovementTypeResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMovementTypes extends ListRecords
{
    protected static string $resource = MovementTypeResource::class;

    use ListPageTrait;
}
