<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DoctorResource\Pages;
use App\Filament\Resources\DoctorResource\RelationManagers;
use App\Models\Doctor;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class DoctorResource extends Resource
{
    protected static ?string $model = Doctor::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('User Details')->schema([
                    TextInput::make('user.name')
                        ->label('Full Name')
                        ->required(),
                    TextInput::make('user.email')
                        ->label('Email')
                        ->email()
                        ->unique('users', 'email')
                        ->required(),
                    TextInput::make('user.phone_number')
                        ->label('Phone Number')
                        ->required(),
                    TextInput::make('user.password')
                        ->label('Password')
                        ->password()
                        ->required()
                        ->dehydrated(fn ($state) => filled($state))
                        ->dehydrateStateUsing(fn ($state) => bcrypt($state)),
                ]),

            Section::make('Doctor Details')->schema([
                TextInput::make('specialization')
                    ->label('Specialization')
                    ->required(),
                TextInput::make('experience')
                    ->label('Experience (Years)')
                    ->numeric()
                    ->required(),
                TextInput::make('working_days')
                    ->label('Working Days')
                    ->required(),
                TextInput::make('consultation_fee')
                    ->label('Consultation Fee')
                    ->numeric()
                    ->required(),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('Doctor Name'),
                Tables\Columns\TextColumn::make('specialization'),
                Tables\Columns\TextColumn::make('experience')
                    ->label('Experience (Years)'),
                Tables\Columns\TextColumn::make('user.phone_number')->label('Phone Number'),
                Tables\Columns\TextColumn::make('working_days'),
                Tables\Columns\TextColumn::make('consultation_fee')
                    ->money('USD'),
                Tables\Columns\ImageColumn::make('profile_picture')
                    ->label('Profile Picture'),
            ])
            ->filters([
                // Add filters here, e.g., by specialization or experience
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDoctors::route('/'),
            'create' => Pages\CreateDoctor::route('/create'),
            'edit' => Pages\EditDoctor::route('/{record}/edit'),
        ];
    }

    
}
