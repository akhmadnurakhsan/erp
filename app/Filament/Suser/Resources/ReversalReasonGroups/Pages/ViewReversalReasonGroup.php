<?php

namespace App\Filament\Suser\Resources\ReversalReasonGroups\Pages;

use App\Filament\Suser\Resources\ReversalReasonGroups\ReversalReasonGroupResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewReversalReasonGroup extends ViewRecord
{
    protected static string $resource = ReversalReasonGroupResource::class;

    use ViewPageWithDeleteTrait;
}
