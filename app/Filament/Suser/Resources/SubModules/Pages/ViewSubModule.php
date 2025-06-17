<?php

namespace App\Filament\Suser\Resources\SubModules\Pages;

use App\Filament\Suser\Resources\SubModules\SubModuleResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSubModule extends ViewRecord
{
    protected static string $resource = SubModuleResource::class;

    use ViewPageWithDeleteTrait;
}
