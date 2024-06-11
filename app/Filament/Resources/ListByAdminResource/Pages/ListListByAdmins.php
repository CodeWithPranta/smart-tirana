<?php

namespace App\Filament\Resources\ListByAdminResource\Pages;

use App\Filament\Resources\ListByAdminResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListListByAdmins extends ListRecords
{
    protected static string $resource = ListByAdminResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
