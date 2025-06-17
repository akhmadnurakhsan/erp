<?php

namespace App\Filament\Suser\Resources\Kabupatens\Pages;

use App\Filament\Suser\Resources\Kabupatens\KabupatenResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditKabupaten extends EditRecord
{
    protected static string $resource = KabupatenResource::class;

    use EditPageWithDeleteTrait;
}
