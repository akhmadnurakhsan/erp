<?php

namespace App\Filament\Suser\Resources\Statuses\Pages;

use App\Filament\Suser\Resources\Statuses\StatusResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditStatus extends EditRecord
{
    protected static string $resource = StatusResource::class;

    use EditPageWithDeleteTrait;
}
