<?php

namespace App\Filament\Suser\Resources\Kabupatens\Pages;

use App\Filament\Suser\Resources\Kabupatens\KabupatenResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewKabupaten extends ViewRecord
{
    protected static string $resource = KabupatenResource::class;

    use ViewPageWithDeleteTrait;
}
