<?php

namespace App\Filament\Suser\Resources\Titles\Pages;

use App\Filament\Suser\Resources\Titles\TitleResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTitle extends ViewRecord
{
    protected static string $resource = TitleResource::class;

    use ViewPageWithDeleteTrait;
}
