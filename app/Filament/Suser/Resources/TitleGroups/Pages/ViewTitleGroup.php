<?php

namespace App\Filament\Suser\Resources\TitleGroups\Pages;

use App\Filament\Suser\Resources\TitleGroups\TitleGroupResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTitleGroup extends ViewRecord
{
    protected static string $resource = TitleGroupResource::class;

    use ViewPageWithDeleteTrait;
}
