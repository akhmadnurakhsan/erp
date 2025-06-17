<?php

namespace App\Filament\Suser\Resources\Kelurahans\Pages;

use App\Filament\Suser\Resources\Kelurahans\KelurahanResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewKelurahan extends ViewRecord
{
    protected static string $resource = KelurahanResource::class;

    use ViewPageWithDeleteTrait;
}
