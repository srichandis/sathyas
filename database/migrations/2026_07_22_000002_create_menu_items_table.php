<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('traditional_name')->nullable();
            $table->string('category');
            $table->text('description');
            $table->json('ingredients');
            $table->string('image');
            $table->boolean('is_popular')->default(false);
            $table->string('sattvic_grade')->default('100% Pure Sattvic (No Onion/Garlic)');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('menu_items');
    }
};
