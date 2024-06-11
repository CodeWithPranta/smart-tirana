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
        Schema::create('list_by_admins', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Listing::class);
            $table->string('main_title');
            $table->json('list_details')->nullable();
            $table->json('photos')->nullable();
            $table->json('key_values')->nullable();
            $table->text('google_map_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_by_admins');
    }
};
