<?php

namespace App\Filament\Suser\Resources\ReversalReasonReversalReasonGroups\Pages;

use App\Filament\Suser\Resources\ReversalReasonReversalReasonGroups\ReversalReasonReversalReasonGroupResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewReversalReasonReversalReasonGroup extends ViewRecord
{
    protected static string $resource = ReversalReasonReversalReasonGroupResource::class;

    use ViewPageWithDeleteTrait;
}
