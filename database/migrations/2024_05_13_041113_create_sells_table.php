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
        Schema::create('sells', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Listing::class);
            $table->string('type');
            $table->string('short_product_name');
            $table->string('model_name');
            $table->longText('description');
            $table->string('pick_up_location');
            $table->decimal('sales_price', 10);
            $table->decimal('original_price', 10);
            $table->string('purchased_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sells');
    }
};
