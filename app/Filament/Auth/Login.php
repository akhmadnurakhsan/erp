<?php

namespace App\Filament\Auth;

use Filament\Auth\Pages\Login as PagesLogin;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Schema;
use Illuminate\Validation\ValidationException;

class Login extends PagesLogin
{
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                $this->getLoginFormComponent(),
                $this->getPasswordFormComponent(),
                $this->getRememberFormComponent(),
            ])
            ->statePath('data');
    }

    protected function getLoginFormComponent(): Component
    {
        return TextInput::make('username')
            ->label('Username')
            ->required()
            ->autocomplete()
            ->autofocus()
            ->extraInputAttributes(['tabindex' => 1]);
    }

    protected function getCredentialsFromFormData(array $data): array
    {
        // $login_type = filter_var($data['username'], FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        // dd($data);

        return [
            // $login_type => $data['username'],
            'username' => $data['username'],
            'password' => $data['password'],

        ];
    }

    protected function throwFailureValidationException(): never
    {

        throw ValidationException::withMessages([
            'data.username' => __('filament-panels::pages/auth/login.messages.failed'),
        ]);
    }
}
