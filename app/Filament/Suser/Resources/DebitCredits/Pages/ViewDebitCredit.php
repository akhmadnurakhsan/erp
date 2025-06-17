<?php

namespace App\Filament\Suser\Resources\DebitCredits\Pages;

use App\Filament\Suser\Resources\DebitCredits\DebitCreditResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewDebitCredit extends ViewRecord
{
    protected static string $resource = DebitCreditResource::class;

    use ViewPageWithDeleteTrait;
}
