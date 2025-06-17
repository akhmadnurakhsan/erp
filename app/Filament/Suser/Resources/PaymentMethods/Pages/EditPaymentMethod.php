<?php

namespace App\Filament\Suser\Resources\PaymentMethods\Pages;

use App\Filament\Suser\Resources\PaymentMethods\PaymentMethodResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPaymentMethod extends EditRecord
{
    protected static string $resource = PaymentMethodResource::class;

    use EditPageWithDeleteTrait;
}
