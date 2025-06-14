<?php

namespace App\Traits;

use Filament\Actions\Action;
use Filament\Support\Icons\Heroicon;

trait CreatePageTrait
{

    protected function getHeaderActions(): array
    {
        return [
            Action::make('Back to List')
                ->url($this->getResource()::getUrl('index'))
                ->icon(Heroicon::ListBullet),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
