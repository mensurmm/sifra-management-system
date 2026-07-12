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
       Schema::create('books', function (Blueprint $table) {
    $table->id();

    $table->foreignId('category_id')
        ->constrained('book_categories')
        ->cascadeOnUpdate()
        ->restrictOnDelete();

    $table->foreignId('publisher_id')
        ->constrained()
        ->cascadeOnUpdate()
        ->restrictOnDelete();

    $table->string('isbn')->unique();

    $table->string('title');

    $table->string('edition')->nullable();

    $table->integer('publication_year')->nullable();

    $table->string('language')->default('English');

    $table->text('description')->nullable();

    $table->boolean('is_active')->default(true);

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
