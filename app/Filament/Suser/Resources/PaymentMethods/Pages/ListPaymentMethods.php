<?php

namespace App\Filament\Suser\Resources\PaymentMethods\Pages;

use App\Filament\Suser\Resources\PaymentMethods\PaymentMethodResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPaymentMethods extends ListRecords
{
    protected static string $resource = PaymentMethodResource::class;

    use ListPageTrait;
}
