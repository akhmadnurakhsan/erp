<?php

namespace App\Filament\Suser\Resources\NrObjects\Pages;

use App\Filament\Suser\Resources\NrObjects\NrObjectResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditNrObject extends EditRecord
{
    protected static string $resource = NrObjectResource::class;

    use EditPageWithDeleteTrait;
}
