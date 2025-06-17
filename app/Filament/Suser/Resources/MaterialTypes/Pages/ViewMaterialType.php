<?php

namespace App\Filament\Suser\Resources\MaterialTypes\Pages;

use App\Filament\Suser\Resources\MaterialTypes\MaterialTypeResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMaterialType extends ViewRecord
{
    protected static string $resource = MaterialTypeResource::class;

    use ViewPageWithDeleteTrait;
}
