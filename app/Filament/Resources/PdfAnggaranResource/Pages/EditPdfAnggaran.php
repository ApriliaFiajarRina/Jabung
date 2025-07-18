<?php

namespace App\Filament\Resources\PdfAnggaranResource\Pages;

use App\Filament\Resources\PdfAnggaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPdfAnggaran extends EditRecord
{
    protected static string $resource = PdfAnggaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
