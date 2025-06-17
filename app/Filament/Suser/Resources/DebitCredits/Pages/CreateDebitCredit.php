<?php

namespace App\Filament\Suser\Resources\DebitCredits\Pages;

use App\Filament\Suser\Resources\DebitCredits\DebitCreditResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateDebitCredit extends CreateRecord
{
    protected static string $resource = DebitCreditResource::class;

    use CreatePageTrait;
}
