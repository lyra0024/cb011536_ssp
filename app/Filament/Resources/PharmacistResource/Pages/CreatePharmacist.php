<?php

namespace App\Filament\Resources\PharmacistResource\Pages;

use App\Filament\Resources\PharmacistResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePharmacist extends CreateRecord
{
    protected static string $resource = PharmacistResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (isset($data['user'])) {
            // Create a new user
            $user = \App\Models\User::create([
                'name' => $data['user']['name'],
                'email' => $data['user']['email'],
                'phone_number' => $data['user']['phone_number'],
                'password' => $data['user']['password'],
                'role' => 'pharmacist',
            ]);

            // Only keep the doctor-specific fields and add user_id
            return [
                'user_id' => $user->id,
                'experience' => $data['experience'],
                'working_days' => $data['working_days'],
            ];
        }

        return $data;
    }
}
