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
       Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->boolean('is_cover')->default(false);
            $table->string('path', 512); // originalas arba pagrindinė referencija
            $table->string('format', 10)->default('jpg'); // avif/webp/jpg
            $table->integer('width');
            $table->integer('height');
            $table->integer('sort_order')->default(0); // svarbu galerijai
            $table->timestamps();
        });    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
