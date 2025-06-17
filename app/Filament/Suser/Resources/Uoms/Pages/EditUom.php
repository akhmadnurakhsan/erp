<?php

namespace App\Filament\Suser\Resources\Uoms\Pages;

use App\Filament\Suser\Resources\Uoms\UomResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditUom extends EditRecord
{
    protected static string $resource = UomResource::class;

    use EditPageWithDeleteTrait;
}
