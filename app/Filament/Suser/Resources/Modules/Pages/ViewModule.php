<?php

namespace App\Filament\Suser\Resources\Modules\Pages;

use App\Filament\Suser\Resources\Modules\ModuleResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewModule extends ViewRecord
{
    protected static string $resource = ModuleResource::class;

    use ViewPageWithDeleteTrait;
}
