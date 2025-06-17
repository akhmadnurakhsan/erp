<?php

namespace App\Filament\Suser\Resources\PaymentMethods\Pages;

use App\Filament\Suser\Resources\PaymentMethods\PaymentMethodResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPaymentMethod extends ViewRecord
{
    protected static string $resource = PaymentMethodResource::class;

    use ViewPageWithDeleteTrait;
}
