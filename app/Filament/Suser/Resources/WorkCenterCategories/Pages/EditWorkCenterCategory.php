<?php

namespace App\Filament\Suser\Resources\WorkCenterCategories\Pages;

use App\Filament\Suser\Resources\WorkCenterCategories\WorkCenterCategoryResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditWorkCenterCategory extends EditRecord
{
    protected static string $resource = WorkCenterCategoryResource::class;

    use EditPageWithDeleteTrait;
}
