<?php

namespace App\Filament\Suser\Resources\PartnerFunctions\Pages;

use App\Filament\Suser\Resources\PartnerFunctions\PartnerFunctionResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPartnerFunction extends EditRecord
{
    protected static string $resource = PartnerFunctionResource::class;

    use EditPageWithDeleteTrait;
}
