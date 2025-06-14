<?php

namespace App\Traits;

use App\Filament\Actions\NextAction;
use App\Filament\Actions\PreviousAction;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Support\Icons\Heroicon;
use Kenepa\ResourceLock\Resources\Pages\Concerns\UsesResourceLock;

trait EditPageWithDeleteTrait
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
            DeleteAction::make()
                ->icon(Heroicon::Trash),
            ForceDeleteAction::make()
                ->icon(Heroicon::Trash),
            RestoreAction::make()
                ->icon(Heroicon::ArrowUturnLeft),
            Action::make('Back to List')
                ->url($this->getResource()::getUrl('index'))
                ->icon(Heroicon::ListBullet),
            Action::make('New ')
                ->url($this->getResource()::getUrl('create'))
                ->icon(Heroicon::OutlinedPlus),
        ];
    }
}
