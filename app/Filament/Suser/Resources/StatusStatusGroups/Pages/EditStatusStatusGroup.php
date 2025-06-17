<?php

namespace App\Filament\Suser\Resources\StatusStatusGroups\Pages;

use App\Filament\Suser\Resources\StatusStatusGroups\StatusStatusGroupResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditStatusStatusGroup extends EditRecord
{
    protected static string $resource = StatusStatusGroupResource::class;

    use EditPageWithDeleteTrait;
}
