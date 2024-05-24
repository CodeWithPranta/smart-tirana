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
        Schema::create('venues', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Listing::class);
            $table->string('venue_name');
            $table->json('attachments');
            $table->text('address');
            $table->string('nearest_cross_street');
            $table->text('nearby_metro');
            $table->string('phone_number');
            $table->string('channel_id');
            $table->string('website')->nullable();
            $table->text('opening_hours');
            $table->string('wifi_name');
            $table->string('wifi_password')->nullable();
            $table->longText('venue_description');
            $table->date('open_since');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venues');
    }
};
