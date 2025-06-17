<?php

namespace App\Filament\Suser\Resources\FiscalYears\Pages;

use App\Filament\Suser\Resources\FiscalYears\FiscalYearResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditFiscalYear extends EditRecord
{
    protected static string $resource = FiscalYearResource::class;

    use EditPageWithDeleteTrait;
}
