<?php

namespace App\Filament\Suser\Resources\StatusGroups\Pages;

use App\Filament\Suser\Resources\StatusGroups\StatusGroupResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewStatusGroup extends ViewRecord
{
    protected static string $resource = StatusGroupResource::class;

    use ViewPageWithDeleteTrait;
}
