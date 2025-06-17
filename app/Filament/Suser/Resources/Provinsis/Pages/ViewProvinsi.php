<?php

namespace App\Filament\Suser\Resources\Provinsis\Pages;

use App\Filament\Suser\Resources\Provinsis\ProvinsiResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewProvinsi extends ViewRecord
{
    protected static string $resource = ProvinsiResource::class;

    use ViewPageWithDeleteTrait;
}
