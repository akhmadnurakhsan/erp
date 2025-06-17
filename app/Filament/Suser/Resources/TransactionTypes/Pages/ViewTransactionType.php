<?php

namespace App\Filament\Suser\Resources\TransactionTypes\Pages;

use App\Filament\Suser\Resources\TransactionTypes\TransactionTypeResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTransactionType extends ViewRecord
{
    protected static string $resource = TransactionTypeResource::class;

    use ViewPageWithDeleteTrait;
}
