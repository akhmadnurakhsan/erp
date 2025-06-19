<?php

namespace App\Filament\Schemas\Tables\recordActions;

use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;

class BasicActionGrouprecordActions
{
    public static function make(): ActionGroup
    {
        return ActionGroup::make([
            ViewAction::make(),
            EditAction::make(),
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ]);
    }
}
