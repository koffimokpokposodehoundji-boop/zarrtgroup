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

    Schema::create('contacts', function (Blueprint $table) {
    $table->id();
    $table->string('name');      // Correspond à name="name"
    $table->string('email');     // Correspond à name="email"
    $table->string('phone')->nullable();    // Correspond à name="phone"
    $table->string('company')->nullable();  // Correspond à name="company"
    $table->string('service');   // Correspond à name="service"
    $table->text('message');     // Correspond à name="message"
    $table->timestamps();
});
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
