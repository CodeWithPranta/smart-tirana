<?php

namespace App\Filament\Vendor\Resources\SellResource\Pages;

use App\Filament\Vendor\Resources\SellResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSells extends ListRecords
{
    protected static string $resource = SellResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
