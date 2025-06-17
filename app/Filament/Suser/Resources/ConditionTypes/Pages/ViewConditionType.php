<?php

namespace App\Filament\Suser\Resources\ConditionTypes\Pages;

use App\Filament\Suser\Resources\ConditionTypes\ConditionTypeResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewConditionType extends ViewRecord
{
    protected static string $resource = ConditionTypeResource::class;

    use ViewPageWithDeleteTrait;
}
