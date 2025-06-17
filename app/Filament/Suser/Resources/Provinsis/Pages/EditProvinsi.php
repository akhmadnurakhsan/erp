<?php

namespace App\Filament\Suser\Resources\Provinsis\Pages;

use App\Filament\Suser\Resources\Provinsis\ProvinsiResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditProvinsi extends EditRecord
{
    protected static string $resource = ProvinsiResource::class;

    use EditPageWithDeleteTrait;
}
