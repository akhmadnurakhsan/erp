<?php

namespace App\Filament\Suser\Resources\StorageConditions\Pages;

use App\Filament\Suser\Resources\StorageConditions\StorageConditionResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditStorageCondition extends EditRecord
{
    protected static string $resource = StorageConditionResource::class;

    use EditPageWithDeleteTrait;
}
