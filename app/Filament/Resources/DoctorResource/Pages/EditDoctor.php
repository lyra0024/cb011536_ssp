<?php

namespace App\Filament\Resources\DoctorResource\Pages;

use App\Filament\Resources\DoctorResource;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDoctor extends EditRecord
{
    protected static string $resource = DoctorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getFormData(): array
    {
        $data = parent::getFormData();

        // Load the user details
        $user = $this->record->user; // Assuming there's a 'user' relationship

        // Add user data to the form data
        $data['user'] = [
            'name' => $user->name,
            'email' => $user->email,
            'phone_number' => $user->phone_number,
        ];

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (isset($data['user'])) {
            $user = User::find($this->record->user_id);

            $userData = [
                'name' => $data['user']['name'],
                'email' => $data['user']['email'],
                'phone_number' => $data['user']['phone_number'],
            ];

            // Update password only if it's provided
            if (!empty($data['user']['password'])) {
                $userData['password'] = bcrypt($data['user']['password']);
            }

            $user->update($userData);

            // Remove user data from the doctor update
            unset($data['user']);
        }

        return $data;
    }
}
