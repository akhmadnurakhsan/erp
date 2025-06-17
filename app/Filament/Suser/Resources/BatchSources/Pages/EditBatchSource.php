<?php

namespace App\Filament\Suser\Resources\BatchSources\Pages;

use App\Filament\Suser\Resources\BatchSources\BatchSourceResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditBatchSource extends EditRecord
{
    protected static string $resource = BatchSourceResource::class;

    use EditPageWithDeleteTrait;
}
