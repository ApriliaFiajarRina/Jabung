<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendudukResource\Pages;
use App\Filament\Resources\PendudukResource\RelationManagers;
use App\Models\Penduduk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PendudukResource extends Resource
{
    protected static ?string $model = Penduduk::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Penduduk';
    protected static ?string $navigationGroup = 'Jumlah Penduduk';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tipe_penduduk')
                    ->label("Tipe Penduduk")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jumlah_penduduk')
                    ->label("Jumlah Penduduk")
                    ->required()
                    ->numeric()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tipe_penduduk')
                    ->label("Tipe Penduduk"),
                Tables\columns\TextColumn::make('jumlah_penduduk')
                    ->label("Jumlah Penduduk")

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListPenduduks::route('/'),
        ];
    }
}
