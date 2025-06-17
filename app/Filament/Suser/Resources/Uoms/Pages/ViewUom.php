<?php

namespace App\Filament\Suser\Resources\Uoms\Pages;

use App\Filament\Suser\Resources\Uoms\UomResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewUom extends ViewRecord
{
    protected static string $resource = UomResource::class;

    use ViewPageWithDeleteTrait;
}
