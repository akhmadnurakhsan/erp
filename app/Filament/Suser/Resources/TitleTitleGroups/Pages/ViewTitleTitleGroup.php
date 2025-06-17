<?php

namespace App\Filament\Suser\Resources\TitleTitleGroups\Pages;

use App\Filament\Suser\Resources\TitleTitleGroups\TitleTitleGroupResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTitleTitleGroup extends ViewRecord
{
    protected static string $resource = TitleTitleGroupResource::class;

    use ViewPageWithDeleteTrait;
}
