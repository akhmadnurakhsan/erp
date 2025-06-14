<?php

namespace App\Traits;

use Filament\Actions\CreateAction;
use Filament\Support\Icons\Heroicon;

trait ListPageTrait
{
    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->icon(Heroicon::OutlinedPlus),
        ];
    }
}
