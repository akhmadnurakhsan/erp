<?php

namespace App\Filament\Suser\Resources\Kodepos\Pages;

use App\Filament\Suser\Resources\Kodepos\KodeposResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewKodepos extends ViewRecord
{
    protected static string $resource = KodeposResource::class;

    use ViewPageWithDeleteTrait;
}
