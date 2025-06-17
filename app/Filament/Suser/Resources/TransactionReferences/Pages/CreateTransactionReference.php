<?php

namespace App\Filament\Suser\Resources\TransactionReferences\Pages;

use App\Filament\Suser\Resources\TransactionReferences\TransactionReferenceResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateTransactionReference extends CreateRecord
{
    protected static string $resource = TransactionReferenceResource::class;

    use CreatePageTrait;
}
