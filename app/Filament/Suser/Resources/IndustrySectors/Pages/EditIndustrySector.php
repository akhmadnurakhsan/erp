<?php

namespace App\Filament\Suser\Resources\IndustrySectors\Pages;

use App\Filament\Suser\Resources\IndustrySectors\IndustrySectorResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditIndustrySector extends EditRecord
{
    protected static string $resource = IndustrySectorResource::class;

    use EditPageWithDeleteTrait;
}
