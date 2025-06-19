<?php

namespace App\Filament\Schemas\Tables\toolbarActions;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;

class BasicBulkActionGrouptoolbarActions
{
    public static function make(): BulkActionGroup
    {
        return BulkActionGroup::make([
            DeleteBulkAction::make(),
            ForceDeleteBulkAction::make(),
            RestoreBulkAction::make(),
        ]);
    }
}
