<?php

namespace App\Filament\Suser\Resources\ReversalReasonGroups\Pages;

use App\Filament\Suser\Resources\ReversalReasonGroups\ReversalReasonGroupResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListReversalReasonGroups extends ListRecords
{
    protected static string $resource = ReversalReasonGroupResource::class;

    use ListPageTrait;
}
