<?php

namespace App\Filament\Suser\Resources\AccountKeys\Pages;

use App\Filament\Suser\Resources\AccountKeys\AccountKeyResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateAccountKey extends CreateRecord
{
    protected static string $resource = AccountKeyResource::class;

    use CreatePageTrait;
}
