<?php

namespace App\Traits;

use App\Filament\Actions\NextAction;
use App\Filament\Actions\PreviousAction;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Support\Icons\Heroicon;
use Kenepa\ResourceLock\Resources\Pages\Concerns\UsesResourceLock;

trait ViewPageWithDeleteTrait
{
    // use UsesResourceLock;
    use RecordNavigationTrait;

    protected function getHeaderActions(): array
    {
        return [
            PreviousAction::make(),
            NextAction::make(),
            EditAction::make()
                ->icon(Heroicon::PencilSquare),
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

    // protected function getRedirectUrl(): string
    // {
    //     return $this->getResource()::getUrl('index');
    // }
}
