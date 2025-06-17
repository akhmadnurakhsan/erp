<?php

namespace App\Filament\Suser\Resources\Users\Pages;

use App\Filament\Suser\Resources\Users\UserResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewUser extends ViewRecord
{
    protected static string $resource = UserResource::class;

    use ViewPageWithDeleteTrait;
}
