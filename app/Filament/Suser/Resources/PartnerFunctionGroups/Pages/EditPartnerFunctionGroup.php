<?php

namespace App\Filament\Suser\Resources\PartnerFunctionGroups\Pages;

use App\Filament\Suser\Resources\PartnerFunctionGroups\PartnerFunctionGroupResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPartnerFunctionGroup extends EditRecord
{
    protected static string $resource = PartnerFunctionGroupResource::class;

    use EditPageWithDeleteTrait;
}
