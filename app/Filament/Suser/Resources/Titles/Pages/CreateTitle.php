<?php

namespace App\Filament\Suser\Resources\Titles\Pages;

use App\Filament\Suser\Resources\Titles\TitleResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateTitle extends CreateRecord
{
    protected static string $resource = TitleResource::class;

    use CreatePageTrait;
}
