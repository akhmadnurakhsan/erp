<?php

namespace App\Filament\Suser\Resources\Users\Pages;

use App\Filament\Suser\Resources\Users\UserResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    use ListPageTrait;
}
