<?php

namespace App\Filament\Suser\Resources\ReversalReasonGroups\Pages;

use App\Filament\Suser\Resources\ReversalReasonGroups\ReversalReasonGroupResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateReversalReasonGroup extends CreateRecord
{
    protected static string $resource = ReversalReasonGroupResource::class;

    use CreatePageTrait;
}
