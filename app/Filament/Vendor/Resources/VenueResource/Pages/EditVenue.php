<?php

namespace App\Filament\Vendor\Resources\VenueResource\Pages;

use App\Filament\Vendor\Resources\VenueResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVenue extends EditRecord
{
    protected static string $resource = VenueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
