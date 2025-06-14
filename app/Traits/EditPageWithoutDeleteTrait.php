<?php

namespace App\Traits;

use App\Filament\Actions\NextAction;
use App\Filament\Actions\PreviousAction;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Support\Icons\Heroicon;
use Kenepa\ResourceLock\Resources\Pages\Concerns\UsesResourceLock;

trait EditPageWithoutDeleteTrait
{
    // use UsesResourceLock;
    use RecordNavigationTrait;

    protected function getHeaderActions(): array
    {
        return [
            PreviousAction::make(),
            NextAction::make(),
            ViewAction::make()
                ->icon(Heroicon::Eye),
            Action::make('Back to List')
                ->url($this->getResource()::getUrl('index'))
                ->icon(Heroicon::ListBullet),
            Action::make('New ')
                ->url($this->getResource()::getUrl('create'))
                ->icon(Heroicon::OutlinedPlus),
        ];
    }
}
