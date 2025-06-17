<?php

namespace App\Filament\Suser\Resources\ItemCategories\Pages;

use App\Filament\Suser\Resources\ItemCategories\ItemCategoryResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditItemCategory extends EditRecord
{
    protected static string $resource = ItemCategoryResource::class;

    use EditPageWithDeleteTrait;
}
