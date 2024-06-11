<?php

namespace App\Filament\Resources\ListByAdminResource\Pages;

use App\Filament\Resources\ListByAdminResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditListByAdmin extends EditRecord
{
    protected static string $resource = ListByAdminResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
