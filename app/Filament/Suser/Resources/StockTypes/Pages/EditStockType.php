<?php

namespace App\Filament\Suser\Resources\StockTypes\Pages;

use App\Filament\Suser\Resources\StockTypes\StockTypeResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditStockType extends EditRecord
{
    protected static string $resource = StockTypeResource::class;

    use EditPageWithDeleteTrait;
}
