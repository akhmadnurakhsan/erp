<?php

namespace App\Filament\Suser\Resources\ReversalReasonGroups\Pages;

use App\Filament\Suser\Resources\ReversalReasonGroups\ReversalReasonGroupResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditReversalReasonGroup extends EditRecord
{
    protected static string $resource = ReversalReasonGroupResource::class;

    use EditPageWithDeleteTrait;
}
