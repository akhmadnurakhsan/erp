<?php

namespace App\Filament\Suser\Resources\PartnerFunctionPartnerFunctionGroups\Pages;

use App\Filament\Suser\Resources\PartnerFunctionPartnerFunctionGroups\PartnerFunctionPartnerFunctionGroupResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPartnerFunctionPartnerFunctionGroup extends ViewRecord
{
    protected static string $resource = PartnerFunctionPartnerFunctionGroupResource::class;

    use ViewPageWithDeleteTrait;
}
