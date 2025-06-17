<?php

namespace App\Filament\Suser\Resources\MaterialTypes\Pages;

use App\Filament\Suser\Resources\MaterialTypes\MaterialTypeResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMaterialType extends EditRecord
{
    protected static string $resource = MaterialTypeResource::class;

    use EditPageWithDeleteTrait;
}
