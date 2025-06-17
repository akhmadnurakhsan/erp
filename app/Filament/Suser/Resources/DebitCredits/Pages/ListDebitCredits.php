<?php

namespace App\Filament\Suser\Resources\DebitCredits\Pages;

use App\Filament\Suser\Resources\DebitCredits\DebitCreditResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDebitCredits extends ListRecords
{
    protected static string $resource = DebitCreditResource::class;

    use ListPageTrait;
}
