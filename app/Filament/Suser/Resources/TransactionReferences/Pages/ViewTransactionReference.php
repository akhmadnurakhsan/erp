<?php

namespace App\Filament\Suser\Resources\TransactionReferences\Pages;

use App\Filament\Suser\Resources\TransactionReferences\TransactionReferenceResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTransactionReference extends ViewRecord
{
    protected static string $resource = TransactionReferenceResource::class;

    use ViewPageWithDeleteTrait;
}
