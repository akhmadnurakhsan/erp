<?php

namespace App\Filament\Suser\Resources\TemperatureConditions\Pages;

use App\Filament\Suser\Resources\TemperatureConditions\TemperatureConditionResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditTemperatureCondition extends EditRecord
{
    protected static string $resource = TemperatureConditionResource::class;

    use EditPageWithDeleteTrait;
}
