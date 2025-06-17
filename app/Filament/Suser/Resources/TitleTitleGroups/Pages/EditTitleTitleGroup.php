<?php

namespace App\Filament\Suser\Resources\TitleTitleGroups\Pages;

use App\Filament\Suser\Resources\TitleTitleGroups\TitleTitleGroupResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditTitleTitleGroup extends EditRecord
{
    protected static string $resource = TitleTitleGroupResource::class;

    use EditPageWithDeleteTrait;
}
