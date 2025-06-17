<?php

namespace App\Filament\Suser\Resources\TransactionReferences\Pages;

use App\Filament\Suser\Resources\TransactionReferences\TransactionReferenceResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTransactionReferences extends ListRecords
{
    protected static string $resource = TransactionReferenceResource::class;

    use ListPageTrait;
}
