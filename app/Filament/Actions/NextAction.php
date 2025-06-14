<?php

namespace App\Filament\Actions;

use Filament\Actions\Action;
use Filament\Support\Icons\Heroicon;

class NextAction extends Action
{
    public static function getDefaultName(): ?string
    {
        return 'next';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->hiddenLabel()
            ->icon(Heroicon::OutlinedArrowRight)
            ->outlined()
            ->tooltip("Next of {$this->getRecordTitle()}");
    }
}

