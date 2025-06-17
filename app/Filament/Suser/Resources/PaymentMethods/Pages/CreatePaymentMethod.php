<?php

namespace App\Filament\Suser\Resources\PaymentMethods\Pages;

use App\Filament\Suser\Resources\PaymentMethods\PaymentMethodResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreatePaymentMethod extends CreateRecord
{
    protected static string $resource = PaymentMethodResource::class;

    use CreatePageTrait;
}
