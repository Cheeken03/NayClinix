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
        Schema::create('nurses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('group_id')->nullable()->constrained('groups')->onDelete('set null');
            $table->string('nurse_first_name');
            $table->string('nurse_last_name');
            $table->string('nurse_email')->unique();
            $table->string('nurse_image');
            $table->string('nurse_age');
            $table->string('nurse_licence_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nurses');
    }
};
