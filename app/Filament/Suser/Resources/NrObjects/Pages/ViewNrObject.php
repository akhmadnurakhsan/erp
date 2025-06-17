<?php

namespace App\Filament\Suser\Resources\NrObjects\Pages;

use App\Filament\Suser\Resources\NrObjects\NrObjectResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewNrObject extends ViewRecord
{
    protected static string $resource = NrObjectResource::class;

    use ViewPageWithDeleteTrait;
}
