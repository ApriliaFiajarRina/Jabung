<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\Summarizers\Range;


class NewsResource extends Resource
{
    protected static ?string $model = News::class;
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Berita';
    protected static ?string $navigationGroup = 'Galeri';
    protected static ?int $navigationSort = 3;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('writer')->name("Penulis")->required(),
                Forms\Components\TextInput::make('title')->name("Judul")->required(),
                Forms\Components\FileUpload::make('photo_path')->name('Gambar')
                    ->required()
                    ->image()
                    ->imageResizeMode('force')
                    ->imageCropAspectRatio('3:2')
                    ->imageResizeTargetWidth(1200)
                    ->imageResizeTargetHeight(800)
                    ->optimize('jpg'),
                Forms\Components\RichEditor::make('content')->name("Konten")->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('writer')->label("Penulis"),
                Tables\Columns\TextColumn::make('title')->label("Judul")
                    ->limit(50),
                Tables\Columns\TextColumn::make('content')->label("Konten")
                    ->html()
                    ->limit(50),
                Tables\Columns\ImageColumn::make('photo_path')->label("Gambar")
                    ->getStateUsing(function (News $record) {
                        $image = 'storage/' . $record->photo_path;
                        return asset($image);
                    })
                    ->size(50),
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
