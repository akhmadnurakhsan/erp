<?php

namespace App\Filament\Suser\Resources\Statuses\Pages;

use App\Filament\Suser\Resources\Statuses\StatusResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewStatus extends ViewRecord
{
    protected static string $resource = StatusResource::class;

    use ViewPageWithDeleteTrait;
}
