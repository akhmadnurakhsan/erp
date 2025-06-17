<?php

namespace App\Filament\Suser\Resources\PanelRoles\Pages;

use App\Filament\Suser\Resources\PanelRoles\PanelRoleResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPanelRole extends ViewRecord
{
    protected static string $resource = PanelRoleResource::class;

    use ViewPageWithDeleteTrait;
}
