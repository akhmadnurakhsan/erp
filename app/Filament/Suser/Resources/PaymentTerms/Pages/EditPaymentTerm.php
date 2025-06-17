<?php

namespace App\Filament\Suser\Resources\PaymentTerms\Pages;

use App\Filament\Suser\Resources\PaymentTerms\PaymentTermResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPaymentTerm extends EditRecord
{
    protected static string $resource = PaymentTermResource::class;

    use EditPageWithDeleteTrait;
}
