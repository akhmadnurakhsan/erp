<?php

namespace App\Filament\Suser\Resources\Kecamatans\Pages;

use App\Filament\Suser\Resources\Kecamatans\KecamatanResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditKecamatan extends EditRecord
{
    protected static string $resource = KecamatanResource::class;

    use EditPageWithDeleteTrait;
}
