<?php

namespace App\Filament\Suser\Resources\ReversalReasonReversalReasonGroups\Pages;

use App\Filament\Suser\Resources\ReversalReasonReversalReasonGroups\ReversalReasonReversalReasonGroupResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditReversalReasonReversalReasonGroup extends EditRecord
{
    protected static string $resource = ReversalReasonReversalReasonGroupResource::class;

    use EditPageWithDeleteTrait;
}
