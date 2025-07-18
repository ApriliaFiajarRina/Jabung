<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FinanceResource\Pages;
use App\Filament\Resources\FinanceResource\RelationManagers;
use App\Models\Finance;
use App\Models\FinanceCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FinanceResource extends Resource
{
    protected static ?string $model = Finance::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    protected static ?string $navigationLabel = 'Anggaran';
    protected static ?string $navigationGroup = 'Data Anggaran';
    protected static ?int $navigationSort = 5;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label("Nama")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('amount')
                    ->label("Jumlah")
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('finance_category_id')
                    ->label("Kategori Pendapatan")
                    ->options(FinanceCategory::all()->pluck('name', 'id')),
                Forms\Components\TextInput::make('year')
                    ->label("Tahun")
                    ->required()
                    ->numeric()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label("Nama")
                    ->searchable(),
                Tables\Columns\TextColumn::make('amount')
                    ->label("Jumlah")
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->label("Kategori Pendapatan")
                    ->sortable(),
                Tables\Columns\TextColumn::make('year')
                    ->label("Tahun")
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListFinances::route('/'),
            'create' => Pages\CreateFinance::route('/create'),
            'edit' => Pages\EditFinance::route('/{record}/edit'),
        ];
    }
}
