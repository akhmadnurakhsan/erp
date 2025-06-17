<?php

namespace App\Filament\Suser\Resources\PartnerFunctionPartnerFunctionGroups\Pages;

use App\Filament\Suser\Resources\PartnerFunctionPartnerFunctionGroups\PartnerFunctionPartnerFunctionGroupResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreatePartnerFunctionPartnerFunctionGroup extends CreateRecord
{
    protected static string $resource = PartnerFunctionPartnerFunctionGroupResource::class;

    use CreatePageTrait;
}
