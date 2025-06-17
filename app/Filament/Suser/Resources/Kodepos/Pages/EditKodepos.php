<?php

namespace App\Filament\Suser\Resources\Kodepos\Pages;

use App\Filament\Suser\Resources\Kodepos\KodeposResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditKodepos extends EditRecord
{
    protected static string $resource = KodeposResource::class;

    use EditPageWithDeleteTrait;
}
