<?php

namespace App\Filament\Suser\Resources\PaymentTerms\Pages;

use App\Filament\Suser\Resources\PaymentTerms\PaymentTermResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPaymentTerm extends ViewRecord
{
    protected static string $resource = PaymentTermResource::class;

    use ViewPageWithDeleteTrait;
}
