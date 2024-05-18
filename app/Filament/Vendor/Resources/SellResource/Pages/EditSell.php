<?php

namespace App\Filament\Vendor\Resources\SellResource\Pages;

use App\Filament\Vendor\Resources\SellResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSell extends EditRecord
{
    protected static string $resource = SellResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
