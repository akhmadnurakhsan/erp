<?php

namespace App\Filament\Suser\Resources\BusinessPartnerRoles\Pages;

use App\Filament\Suser\Resources\BusinessPartnerRoles\BusinessPartnerRoleResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewBusinessPartnerRole extends ViewRecord
{
    protected static string $resource = BusinessPartnerRoleResource::class;

    use ViewPageWithDeleteTrait;
}
