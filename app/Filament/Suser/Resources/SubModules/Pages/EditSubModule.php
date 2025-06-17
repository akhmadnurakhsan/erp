<?php

namespace App\Filament\Suser\Resources\SubModules\Pages;

use App\Filament\Suser\Resources\SubModules\SubModuleResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSubModule extends EditRecord
{
    protected static string $resource = SubModuleResource::class;

    use EditPageWithDeleteTrait;
}
