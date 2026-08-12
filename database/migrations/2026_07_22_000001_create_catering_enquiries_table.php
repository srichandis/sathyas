<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('catering_enquiries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('user_name');
            $table->string('user_email');
            $table->string('phone');
            $table->string('event_type');
            $table->date('event_date');
            $table->string('event_location')->nullable();
            $table->integer('guest_count');
            $table->json('meal_types');
            $table->json('selected_dishes')->nullable();
            $table->text('special_instructions')->nullable();
            $table->decimal('estimated_price', 10, 2)->nullable();
            $table->string('status')->default('Pending Review');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('catering_enquiries');
    }
};
