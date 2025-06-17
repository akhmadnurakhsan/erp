<?php

namespace App\Filament\Suser\Resources\PaymentTerms\Pages;

use App\Filament\Suser\Resources\PaymentTerms\PaymentTermResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPaymentTerms extends ListRecords
{
    protected static string $resource = PaymentTermResource::class;

    use ListPageTrait;
}
