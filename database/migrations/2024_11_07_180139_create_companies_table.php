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
        Schema::create('companies', function (Blueprint $table) {
            $table->id(); // ID компанії
            $table->string('code')->unique(); // Код компанії
            $table->string('name'); // Назва компанії
            $table->integer('employees'); // Кількість працівників
            $table->string('industry'); // Галузь
            $table->string('address'); // Адреса
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
