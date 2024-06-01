<?php

use App\Models\Listing;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('housings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Listing::class);
            $table->string('property_type');
            $table->string('owner_status');
            $table->string('compound_or_building_name')->nullable();
            $table->text('basic_information');
            $table->integer('floor');
            $table->decimal('size');
            $table->string('main_windows_face_direction')->nullable();
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->json('photos');
            $table->json('features');
            $table->decimal('price', 10);
            $table->string('period');
            $table->string('available_from');
            $table->text('location_on_google_map')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('housings');
    }
};
