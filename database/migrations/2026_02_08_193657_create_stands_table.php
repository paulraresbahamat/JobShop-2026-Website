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
    Schema::create('stands', function (Blueprint $table) {
        $table->id();
        $table->integer('number')->unique(); // 1, 2, 3...
        $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null'); // Who picked it?
        $table->string('company_name')->nullable(); // The name to display on the map
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stands');
    }
};
