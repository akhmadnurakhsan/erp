<?php

namespace App\Filament\Suser\Resources\PartnerFunctionGroups\Pages;

use App\Filament\Suser\Resources\PartnerFunctionGroups\PartnerFunctionGroupResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPartnerFunctionGroup extends ViewRecord
{
    protected static string $resource = PartnerFunctionGroupResource::class;

    use ViewPageWithDeleteTrait;
}
