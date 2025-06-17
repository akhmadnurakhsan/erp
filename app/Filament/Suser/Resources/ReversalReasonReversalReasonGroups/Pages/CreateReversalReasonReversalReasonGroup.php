<?php

namespace App\Filament\Suser\Resources\ReversalReasonReversalReasonGroups\Pages;

use App\Filament\Suser\Resources\ReversalReasonReversalReasonGroups\ReversalReasonReversalReasonGroupResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateReversalReasonReversalReasonGroup extends CreateRecord
{
    protected static string $resource = ReversalReasonReversalReasonGroupResource::class;

    use CreatePageTrait;
}
