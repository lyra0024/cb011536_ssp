<?php

namespace App\Filament\Resources\DoctorResource\Pages;

use App\Filament\Resources\DoctorResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDoctor extends CreateRecord
{
    protected static string $resource = DoctorResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (isset($data['user'])) {
            // Create a new user
            $user = \App\Models\User::create([
                'name' => $data['user']['name'],
                'email' => $data['user']['email'],
                'phone_number' => $data['user']['phone_number'],
                'password' => $data['user']['password'],
                'role' => 'doctor',
            ]);

            // Only keep the doctor-specific fields and add user_id
            return [
                'user_id' => $user->id,
                'specialization' => $data['specialization'],
                'experience' => $data['experience'],
                'working_days' => $data['working_days'],
                'consultation_fee' => $data['consultation_fee'],
            ];
        }

        return $data;
    }
}