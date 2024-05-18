<?php

namespace App\Filament\Vendor\Resources\JobPostResource\Pages;

use App\Filament\Vendor\Resources\JobPostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateJobPost extends CreateRecord
{
    protected static string $resource = JobPostResource::class;
}
