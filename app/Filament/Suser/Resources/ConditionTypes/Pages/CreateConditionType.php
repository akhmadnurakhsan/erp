<?php

namespace App\Filament\Suser\Resources\ConditionTypes\Pages;

use App\Filament\Suser\Resources\ConditionTypes\ConditionTypeResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateConditionType extends CreateRecord
{
    protected static string $resource = ConditionTypeResource::class;

    use CreatePageTrait;
}
