<?php

namespace App\Filament\Suser\Resources\DebitCredits\Pages;

use App\Filament\Suser\Resources\DebitCredits\DebitCreditResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditDebitCredit extends EditRecord
{
    protected static string $resource = DebitCreditResource::class;

    use EditPageWithDeleteTrait;
}
