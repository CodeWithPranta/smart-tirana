<?php

use App\Models\Venue;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_title');
            $table->string('event_status');
            $table->date('on_date');
            $table->date('ends_on_date')->nullable();
            $table->json('weekdays')->nullable();
            $table->time('starts_at_time');
            $table->longText('event_description');
            $table->text('price');
            $table->string('event_type');
            $table->foreignIdFor(Venue::class)->nullable();
            $table->string('contact_of_organizer');
            $table->string('flyer_image');
            $table->string('menu_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
