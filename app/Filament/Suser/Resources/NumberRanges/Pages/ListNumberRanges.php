<?php

namespace App\Filament\Suser\Resources\NumberRanges\Pages;

use App\Filament\Suser\Resources\NumberRanges\NumberRangeResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListNumberRanges extends ListRecords
{
    protected static string $resource = NumberRangeResource::class;

    use ListPageTrait;
}
