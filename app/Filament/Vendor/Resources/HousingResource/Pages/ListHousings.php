<?php

namespace App\Filament\Vendor\Resources\HousingResource\Pages;

use App\Filament\Vendor\Resources\HousingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHousings extends ListRecords
{
    protected static string $resource = HousingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
