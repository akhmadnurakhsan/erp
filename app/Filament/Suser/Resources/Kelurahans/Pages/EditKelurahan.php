<?php

namespace App\Filament\Suser\Resources\Kelurahans\Pages;

use App\Filament\Suser\Resources\Kelurahans\KelurahanResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditKelurahan extends EditRecord
{
    protected static string $resource = KelurahanResource::class;

    use EditPageWithDeleteTrait;
}
