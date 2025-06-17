<?php

namespace App\Filament\Suser\Resources\MaterialGroups\Pages;

use App\Filament\Suser\Resources\MaterialGroups\MaterialGroupResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMaterialGroup extends ViewRecord
{
    protected static string $resource = MaterialGroupResource::class;

    use ViewPageWithDeleteTrait;
}
