<?php

namespace App\Filament\Vendor\Resources\JobPostResource\Pages;

use App\Filament\Vendor\Resources\JobPostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJobPost extends EditRecord
{
    protected static string $resource = JobPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
