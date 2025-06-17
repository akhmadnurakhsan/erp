<?php

namespace App\Filament\Suser\Resources\FiscalYears\Pages;

use App\Filament\Suser\Resources\FiscalYears\FiscalYearResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateFiscalYear extends CreateRecord
{
    protected static string $resource = FiscalYearResource::class;

    use CreatePageTrait;
}
