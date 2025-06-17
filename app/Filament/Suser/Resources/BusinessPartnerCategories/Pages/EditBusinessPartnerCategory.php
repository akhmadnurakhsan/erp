<?php

namespace App\Filament\Suser\Resources\BusinessPartnerCategories\Pages;

use App\Filament\Suser\Resources\BusinessPartnerCategories\BusinessPartnerCategoryResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditBusinessPartnerCategory extends EditRecord
{
    protected static string $resource = BusinessPartnerCategoryResource::class;

    use EditPageWithDeleteTrait;
}
