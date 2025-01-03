<?php

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
        Schema::create('job_postings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('recruiter_id'); // Foreign key for recruiters (users)
            $table->string('position');
            $table->string('place');
            $table->double('salary');
            $table->longText('description');
            $table->date('end_date');
            $table->json('criteria'); // Criteria for applicants
            $table->json('requirement'); // Requirements for the job
            $table->string('status'); // Status
            $table->timestamps();

            $table->foreign('recruiter_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_postings');
    }
};
