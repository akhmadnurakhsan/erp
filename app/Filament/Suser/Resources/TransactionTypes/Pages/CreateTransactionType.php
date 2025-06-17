<?php

namespace App\Filament\Suser\Resources\TransactionTypes\Pages;

use App\Filament\Suser\Resources\TransactionTypes\TransactionTypeResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateTransactionType extends CreateRecord
{
    protected static string $resource = TransactionTypeResource::class;

    use CreatePageTrait;
}
