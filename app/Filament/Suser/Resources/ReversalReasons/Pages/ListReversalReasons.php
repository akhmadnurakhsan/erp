<?php

namespace App\Filament\Suser\Resources\ReversalReasons\Pages;

use App\Filament\Suser\Resources\ReversalReasons\ReversalReasonResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListReversalReasons extends ListRecords
{
    protected static string $resource = ReversalReasonResource::class;

    use ListPageTrait;
}
