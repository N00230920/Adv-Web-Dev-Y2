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
        Schema::create('shows', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('genre');
            $table->text('overview')->nullable();
            $table->string('where_to_watch');
            $table->text('number_of_episodes');
            $table->integer('air_date');
            $table->text('end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shows');
    }
};
