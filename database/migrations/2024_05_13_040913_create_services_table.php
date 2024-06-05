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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Listing::class);
            $table->string('service_title');
            $table->text('address');
            $table->string('more_specific_address')->nullable();
            $table->string('phone_number');
            $table->string('website')->nullable();
            $table->text('service_time_schedule');
            $table->longText('editor_description');
            $table->text('self_information')->nullable();
            $table->json('team_members')->nullable();
            $table->json('media_coverage_images')->nullable();
            $table->json('product_brochures')->nullable();
            $table->longText('service_offered')->nullable();
            $table->text('google_map_embed_code')->nullable();
            $table->json('photos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
