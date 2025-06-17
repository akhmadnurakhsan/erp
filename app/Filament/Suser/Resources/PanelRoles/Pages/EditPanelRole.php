<?php

namespace App\Filament\Suser\Resources\PanelRoles\Pages;

use App\Filament\Suser\Resources\PanelRoles\PanelRoleResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPanelRole extends EditRecord
{
    protected static string $resource = PanelRoleResource::class;

    use EditPageWithDeleteTrait;
}
