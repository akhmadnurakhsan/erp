<?php

namespace App\Filament\Suser\Resources\BatchSources\Pages;

use App\Filament\Suser\Resources\BatchSources\BatchSourceResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewBatchSource extends ViewRecord
{
    protected static string $resource = BatchSourceResource::class;

    use ViewPageWithDeleteTrait;
}
