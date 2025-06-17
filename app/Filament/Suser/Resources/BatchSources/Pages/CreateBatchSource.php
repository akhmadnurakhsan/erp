<?php

namespace App\Filament\Suser\Resources\BatchSources\Pages;

use App\Filament\Suser\Resources\BatchSources\BatchSourceResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateBatchSource extends CreateRecord
{
    protected static string $resource = BatchSourceResource::class;

    use CreatePageTrait;
}
