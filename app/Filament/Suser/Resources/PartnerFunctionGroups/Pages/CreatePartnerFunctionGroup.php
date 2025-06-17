<?php

namespace App\Filament\Suser\Resources\PartnerFunctionGroups\Pages;

use App\Filament\Suser\Resources\PartnerFunctionGroups\PartnerFunctionGroupResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreatePartnerFunctionGroup extends CreateRecord
{
    protected static string $resource = PartnerFunctionGroupResource::class;

    use CreatePageTrait;
}
