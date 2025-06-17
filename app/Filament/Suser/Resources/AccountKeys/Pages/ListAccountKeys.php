<?php

namespace App\Filament\Suser\Resources\AccountKeys\Pages;

use App\Filament\Suser\Resources\AccountKeys\AccountKeyResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAccountKeys extends ListRecords
{
    protected static string $resource = AccountKeyResource::class;

    use ListPageTrait;
}
