<?php

namespace App\Filament\Suser\Resources\ConditionTypes\Pages;

use App\Filament\Suser\Resources\ConditionTypes\ConditionTypeResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListConditionTypes extends ListRecords
{
    protected static string $resource = ConditionTypeResource::class;

    use ListPageTrait;
}
