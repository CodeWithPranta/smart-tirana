<?php

namespace App\Filament\Vendor\Resources\HousingResource\Pages;

use App\Filament\Vendor\Resources\HousingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHousing extends EditRecord
{
    protected static string $resource = HousingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
