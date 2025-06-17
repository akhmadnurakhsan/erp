<?php

namespace App\Filament\Suser\Resources\FiscalYears\Pages;

use App\Filament\Suser\Resources\FiscalYears\FiscalYearResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewFiscalYear extends ViewRecord
{
    protected static string $resource = FiscalYearResource::class;

    use ViewPageWithDeleteTrait;
}
