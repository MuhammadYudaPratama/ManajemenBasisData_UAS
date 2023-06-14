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
        Schema::create('Employees', function (Blueprint $table) {
            $table->id('EmployeeID');
            $table->string('LastName');
            $table->string('FirstName');
            $table->string('Title')->nullable();
            $table->string('TitleOfCourtesy')->nullable();
            $table->date('BirthDate')->nullable();
            $table->date('HireDate')->nullable();
            $table->string('Address')->nullable();
            $table->string('City')->nullable();
            $table->string('Region')->nullable();
            $table->timestamps();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Employees');
    }
};
