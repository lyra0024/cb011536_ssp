<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PharmacistResource\Pages;
use App\Filament\Resources\PharmacistResource\RelationManagers;
use App\Models\Pharmacist;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PharmacistResource extends Resource
{
    protected static ?string $model = Pharmacist::class;

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

                Section::make('Pharmacist Details')->schema([
                    TextInput::make('experience')
                        ->label('Experience (Years)')
                        ->numeric()
                        ->required(),
                    TextInput::make('working_days')
                        ->label('Working Days')
                        ->required(),
                ]),
            ]);
        }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('Pharmacist Name'),
                Tables\Columns\TextColumn::make('experience')
                    ->label('Experience (Years)'),
                Tables\Columns\TextColumn::make('user.phone_number')->label('Phone Number'),
                Tables\Columns\TextColumn::make('working_days'),
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
            'index' => Pages\ListPharmacists::route('/'),
            'create' => Pages\CreatePharmacist::route('/create'),
            'edit' => Pages\EditPharmacist::route('/{record}/edit'),
        ];
    }
}
