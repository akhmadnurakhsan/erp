<?php

namespace App\Filament\Suser\Resources\Kecamatans\Pages;

use App\Filament\Suser\Resources\Kecamatans\KecamatanResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewKecamatan extends ViewRecord
{
    protected static string $resource = KecamatanResource::class;

    use ViewPageWithDeleteTrait;
}
