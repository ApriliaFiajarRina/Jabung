<?php

namespace App\Filament\Resources\DocumentResource\Pages;

use App\Filament\Resources\DocumentResource;
use Carbon\Carbon;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDocument extends EditRecord
{
    protected static string $resource = DocumentResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $date = Carbon::now();

        switch($data['lokasi']) {
            case "Jetis" :
                $data['nomor_penyalur'] = '54.634.07';
                $data['jangka_waktu'] = $date->addDays(90);
                break;
            case "Siman":
                $data['nomor_penyalur'] = '54.634.17';
                $data['jangka_waktu'] = $date->addDays(30);
                break;
        }

        return $data;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
