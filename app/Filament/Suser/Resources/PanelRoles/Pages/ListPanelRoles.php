<?php

namespace App\Filament\Suser\Resources\PanelRoles\Pages;

use App\Filament\Suser\Resources\PanelRoles\PanelRoleResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPanelRoles extends ListRecords
{
    protected static string $resource = PanelRoleResource::class;

    use ListPageTrait;
}
