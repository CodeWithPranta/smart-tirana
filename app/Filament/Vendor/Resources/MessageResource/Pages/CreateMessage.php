<?php

namespace App\Filament\Vendor\Resources\MessageResource\Pages;

use App\Filament\Vendor\Resources\MessageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMessage extends CreateRecord
{
    protected static string $resource = MessageResource::class;
}
