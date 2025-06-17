<?php

namespace App\Filament\Suser\Resources\ReversalReasonReversalReasonGroups\Pages;

use App\Filament\Suser\Resources\ReversalReasonReversalReasonGroups\ReversalReasonReversalReasonGroupResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListReversalReasonReversalReasonGroups extends ListRecords
{
    protected static string $resource = ReversalReasonReversalReasonGroupResource::class;

    use ListPageTrait;
}
