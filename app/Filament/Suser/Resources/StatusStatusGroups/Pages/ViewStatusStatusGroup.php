<?php

namespace App\Filament\Suser\Resources\StatusStatusGroups\Pages;

use App\Filament\Suser\Resources\StatusStatusGroups\StatusStatusGroupResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewStatusStatusGroup extends ViewRecord
{
    protected static string $resource = StatusStatusGroupResource::class;

    use ViewPageWithDeleteTrait;
}
