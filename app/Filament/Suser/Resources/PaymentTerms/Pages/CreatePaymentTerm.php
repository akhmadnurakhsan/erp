<?php

namespace App\Filament\Suser\Resources\PaymentTerms\Pages;

use App\Filament\Suser\Resources\PaymentTerms\PaymentTermResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreatePaymentTerm extends CreateRecord
{
    protected static string $resource = PaymentTermResource::class;

    use CreatePageTrait;
}
