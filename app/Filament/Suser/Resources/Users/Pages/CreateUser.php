<?php

namespace App\Filament\Suser\Resources\Users\Pages;

use App\Filament\Suser\Resources\Users\UserResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['description'] = $data['name'];
        $data['password'] = $data['unique'];

        return $data;
    }

    use CreatePageTrait;
}
