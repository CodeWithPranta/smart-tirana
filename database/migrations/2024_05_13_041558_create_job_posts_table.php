<?php

use App\Models\City;
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
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Listing::class);
            $table->foreignIdFor(City::class);
            $table->string('job_type');
            $table->string('location_type');
            $table->string('seniority');
            $table->decimal('min_salary', 10);
            $table->decimal('max_salary', 10);
            $table->string('candidate_location');
            $table->string('job_title');
            $table->string('company_name');
            $table->text('office_address');
            $table->text('company_introduction');
            $table->string('company_website')->nullable();
            $table->string('listing_logo_image');
            $table->longText('general_job_description');
            $table->longText('position_requirements');
            $table->longText('benefits');
            $table->text('additional_application_instructions');
            $table->string('your_name');
            $table->string('your_phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_posts');
    }
};
