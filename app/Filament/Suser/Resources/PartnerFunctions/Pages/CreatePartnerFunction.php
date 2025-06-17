<?php

namespace App\Filament\Suser\Resources\PartnerFunctions\Pages;

use App\Filament\Suser\Resources\PartnerFunctions\PartnerFunctionResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreatePartnerFunction extends CreateRecord
{
    protected static string $resource = PartnerFunctionResource::class;

    use CreatePageTrait;
}
