<?php

namespace App\Filament\Suser\Resources\Currencies\Pages;

use App\Filament\Suser\Resources\Currencies\CurrencyResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCurrency extends EditRecord
{
    protected static string $resource = CurrencyResource::class;

    use EditPageWithDeleteTrait;
}
