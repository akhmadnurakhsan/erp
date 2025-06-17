<?php

namespace App\Filament\Suser\Resources\BusinessPartnerRoles\Pages;

use App\Filament\Suser\Resources\BusinessPartnerRoles\BusinessPartnerRoleResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateBusinessPartnerRole extends CreateRecord
{
    protected static string $resource = BusinessPartnerRoleResource::class;

    use CreatePageTrait;
}
