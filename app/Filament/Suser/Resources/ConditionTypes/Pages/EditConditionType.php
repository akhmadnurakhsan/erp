<?php

namespace App\Filament\Suser\Resources\ConditionTypes\Pages;

use App\Filament\Suser\Resources\ConditionTypes\ConditionTypeResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditConditionType extends EditRecord
{
    protected static string $resource = ConditionTypeResource::class;

    use EditPageWithDeleteTrait;
}
