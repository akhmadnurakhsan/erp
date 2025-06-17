<?php

namespace App\Filament\Suser\Resources\ItemCategoryGroups\Pages;

use App\Filament\Suser\Resources\ItemCategoryGroups\ItemCategoryGroupResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditItemCategoryGroup extends EditRecord
{
    protected static string $resource = ItemCategoryGroupResource::class;

    use EditPageWithDeleteTrait;
}
