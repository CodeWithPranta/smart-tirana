<?php

namespace App\Filament\Resources\ListByAdminResource\Pages;

use App\Filament\Resources\ListByAdminResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateListByAdmin extends CreateRecord
{
    protected static string $resource = ListByAdminResource::class;
}
