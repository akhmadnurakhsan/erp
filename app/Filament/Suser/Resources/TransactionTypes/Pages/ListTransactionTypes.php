<?php

namespace App\Filament\Suser\Resources\TransactionTypes\Pages;

use App\Filament\Suser\Resources\TransactionTypes\TransactionTypeResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTransactionTypes extends ListRecords
{
    protected static string $resource = TransactionTypeResource::class;

    use ListPageTrait;
}
