<?php

namespace App\Filament\Suser\Resources\FiscalYears\Pages;

use App\Filament\Suser\Resources\FiscalYears\FiscalYearResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFiscalYears extends ListRecords
{
    protected static string $resource = FiscalYearResource::class;

    use ListPageTrait;
}
