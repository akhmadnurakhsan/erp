<?php

namespace App\Filament\Suser\Resources\AccountKeys\Pages;

use App\Filament\Suser\Resources\AccountKeys\AccountKeyResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAccountKey extends ViewRecord
{
    protected static string $resource = AccountKeyResource::class;

    use ViewPageWithDeleteTrait;
}
