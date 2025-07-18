<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GaleryResource\Pages;
use App\Filament\Resources\GaleryResource\RelationManagers;
use App\Models\Galery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GaleryResource extends Resource
{
    protected static ?string $model = Galery::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Galeri';
    protected static ?string $navigationGroup = 'Galeri';
    protected static ?int $navigationSort = 4;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('photo_path')
                    ->label("Foto")
                    ->image()
                    ->imageResizeMode('force')
                    ->imageCropAspectRatio('3:2')
                    ->imageResizeTargetWidth(1200)
                    ->imageResizeTargetHeight(800)
                    ->optimize('jpg')
                    ->required(),
                Forms\Components\TextInput::make('caption')
                    ->label("Caption")
                    ->required()
                    ->maxLength(255)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo_path')->label("Gambar")
                    ->getStateUsing(function (Galery $record) {
                        $image = 'storage/' . $record->photo_path;
                        return asset($image);
                    })
                    ->size(50),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('caption')
                    ->label("Caption")
                    ->searchable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListGaleries::route('/'),
        ];
    }
}
