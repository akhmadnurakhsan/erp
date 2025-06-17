<?php

namespace App\Filament\Suser\Resources\PanelRoles\Pages;

use App\Filament\Suser\Resources\PanelRoles\PanelRoleResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreatePanelRole extends CreateRecord
{
    protected static string $resource = PanelRoleResource::class;

    use CreatePageTrait;
}
