<?php

namespace App\Filament\Suser\Resources\PartnerFunctions\Pages;

use App\Filament\Suser\Resources\PartnerFunctions\PartnerFunctionResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPartnerFunction extends ViewRecord
{
    protected static string $resource = PartnerFunctionResource::class;

    use ViewPageWithDeleteTrait;
}
