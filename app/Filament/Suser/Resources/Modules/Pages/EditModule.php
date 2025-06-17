<?php

namespace App\Filament\Suser\Resources\Modules\Pages;

use App\Filament\Suser\Resources\Modules\ModuleResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditModule extends EditRecord
{
    protected static string $resource = ModuleResource::class;

    use EditPageWithDeleteTrait;
}
