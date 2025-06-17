<?php

namespace App\Filament\Suser\Resources\StatusGroups\Pages;

use App\Filament\Suser\Resources\StatusGroups\StatusGroupResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditStatusGroup extends EditRecord
{
    protected static string $resource = StatusGroupResource::class;

    use EditPageWithDeleteTrait;
}
