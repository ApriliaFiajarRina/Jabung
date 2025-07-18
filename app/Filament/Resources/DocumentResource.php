<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DocumentResource\Pages;
use App\Filament\Resources\DocumentResource\RelationManagers;
use App\Models\Document;
use App\Models\DocumentCategory;
use Filament\Tables\Actions\Action;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DocumentResource extends Resource
{
    protected static ?string $model = Document::class;
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $pluralModelLabel = "Surat Menyurat";
    protected static ?string $navigationLabel = 'Surat Menyurat';
    protected static ?string $navigationGroup = 'Dokumen';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nomor_sk')
                    ->maxLength(10)
                    ->default(null),
                Forms\Components\TextInput::make('nama_lengkap')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('nik')
                    ->required()
                    ->maxLength(16),
                Forms\Components\TextInput::make('ttl')
                    ->maxLength(50),
                Forms\Components\TextInput::make('gender')
                    ->maxLength(10),
                Forms\Components\TextInput::make('pekerjaan')
                    ->maxLength(50),
                Forms\Components\TextInput::make('agama')
                    ->maxLength(50),
                Forms\Components\TextInput::make('alamat')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('keperluan')
                    ->maxLength(100),
                Forms\Components\Select::make('document_category_id')
                    ->label("Kategori Surat")
                    ->options(DocumentCategory::all()->pluck('name', 'id')),
                Forms\Components\TextInput::make('kewarganegaraan')
                    ->maxLength(50)
                    ->default(null),
                Forms\Components\TextInput::make('tanggal_hilang')
                    ->maxLength(50)
                    ->default(null),
                Forms\Components\TextInput::make('barang_hilang')
                    ->maxLength(50)
                    ->default(null),
                Forms\Components\TextInput::make('waktu_hilang')
                    ->maxLength(50)
                    ->default(null),
                Forms\Components\TextInput::make('tempat_hilang')
                    ->maxLength(50)
                    ->default(null),
                Forms\Components\TextInput::make('no_whatsapp')
                    ->maxLength(20)
                    ->default(null),
                Forms\Components\TextInput::make('nkk')
                    ->maxLength(20)
                    ->default(null),
                Forms\Components\TextInput::make('status')
                    ->maxLength(20)
                    ->default(null),
                Forms\Components\TextInput::make('nama_usaha')
                    ->maxLength(50)
                    ->default(null),
                Forms\Components\TextInput::make('jenis_usaha')
                    ->maxLength(50)
                    ->default(null),
                Forms\Components\TextInput::make('klasifikasi')
                    ->maxLength(50)
                    ->default(null),
                Forms\Components\TextInput::make('penanggung_jawab')
                    ->maxLength(50)
                    ->default(null),
                Forms\Components\TextInput::make('alamat_usaha')
                    ->maxLength(50)
                    ->default(null),
                Forms\Components\TextInput::make('berlaku_mulai')
                    ->maxLength(50)
                    ->default(null),
                Forms\Components\TextInput::make('nomor_penyalur')
                    ->maxLength(50)
                    ->default(null),
                Forms\Components\Select::make('lokasi')
                    ->options([
                        "Siman" => "Siman",
                        "Jetis" => "Jetis"
                    ]),
                Forms\Components\TextInput::make('jangka_waktu')
                    ->maxLength(50)
                    ->default(null),
                Forms\Components\TextInput::make('nomor_jbt') 
                    ->maxLength(10)
                    ->default(null)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nomor_sk')
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama_lengkap'),
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Kategori Surat')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('no_whatsapp'),
                Tables\Columns\TextColumn::make('nomor_jbt')
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
                Action::make('Download PDF')
                    ->label("Download PDF")
                    ->icon('heroicon-o-document-arrow-down')
                    ->url(fn(Document $record): string => route('download.surat.pdf', [$record->id, $record->category->name]))
                    ->openUrlInNewTab()
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
            'index' => Pages\ListDocuments::route('/'),
            'create' => Pages\CreateDocument::route('/create'),
            'edit' => Pages\EditDocument::route('/{record}/edit'),
        ];
    }
}
