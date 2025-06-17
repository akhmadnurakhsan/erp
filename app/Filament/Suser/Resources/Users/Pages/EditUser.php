<?php

namespace App\Filament\Suser\Resources\Users\Pages;

use App\Filament\Suser\Resources\Users\UserResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $data['description'] = $data['name'];
        $data['password'] = $data['unique'];
        $record->update($data);

        return $record;
    }

    use EditPageWithDeleteTrait;
}
