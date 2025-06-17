<?php

namespace App\Filament\Suser\Resources\BusinessPartnerRoles\Pages;

use App\Filament\Suser\Resources\BusinessPartnerRoles\BusinessPartnerRoleResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditBusinessPartnerRole extends EditRecord
{
    protected static string $resource = BusinessPartnerRoleResource::class;

    use EditPageWithDeleteTrait;
}
