<?php

namespace App\Filament\Suser\Resources\BusinessPartnerRoles\Pages;

use App\Filament\Suser\Resources\BusinessPartnerRoles\BusinessPartnerRoleResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBusinessPartnerRoles extends ListRecords
{
    protected static string $resource = BusinessPartnerRoleResource::class;

    use ListPageTrait;
}
