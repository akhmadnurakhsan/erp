<?php

namespace App\Filament\Suser\Resources\Titles\Pages;

use App\Filament\Suser\Resources\Titles\TitleResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditTitle extends EditRecord
{
    protected static string $resource = TitleResource::class;

    use EditPageWithDeleteTrait;
}
