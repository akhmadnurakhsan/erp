<?php

namespace App\Filament\Suser\Resources\ReversalReasons\Pages;

use App\Filament\Suser\Resources\ReversalReasons\ReversalReasonResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateReversalReason extends CreateRecord
{
    protected static string $resource = ReversalReasonResource::class;

    use CreatePageTrait;
}
