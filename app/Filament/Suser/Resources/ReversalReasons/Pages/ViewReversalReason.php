<?php

namespace App\Filament\Suser\Resources\ReversalReasons\Pages;

use App\Filament\Suser\Resources\ReversalReasons\ReversalReasonResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewReversalReason extends ViewRecord
{
    protected static string $resource = ReversalReasonResource::class;

    use ViewPageWithDeleteTrait;
}
