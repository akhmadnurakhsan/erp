<?php

namespace App\Filament\Suser\Resources\IndustrySectors\Pages;

use App\Filament\Suser\Resources\IndustrySectors\IndustrySectorResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewIndustrySector extends ViewRecord
{
    protected static string $resource = IndustrySectorResource::class;

    use ViewPageWithDeleteTrait;
}
