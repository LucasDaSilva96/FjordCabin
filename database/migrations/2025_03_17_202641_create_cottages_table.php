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
        Schema::create('cottages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // host ID
            $table->string('title');
            $table->text('description');
            $table->string('location'); // e.g., a general area or municipality
            $table->string('address');  // detailed address if available
            $table->decimal('price', 8, 2); // price per night, for example
            $table->longText('image_path')->nullable(); // path to the image file
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cottages');
    }
};
