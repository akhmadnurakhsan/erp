<?php

namespace App\Filament\Suser\Resources\NumberRanges\Pages;

use App\Filament\Suser\Resources\NumberRanges\NumberRangeResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewNumberRange extends ViewRecord
{
    protected static string $resource = NumberRangeResource::class;

    use ViewPageWithDeleteTrait;
}
