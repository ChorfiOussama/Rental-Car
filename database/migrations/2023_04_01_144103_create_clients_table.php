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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 20);
            $table->string('cin', 20);
            $table->string('permis', 20);
            $table->string('adresse', 200);
            $table->integer('tele');
            $table->integer('gsm');
            $table->string('matricule', 15)->unique();
            // $table->string('marque', 20);
            $table->smallInteger('duree');
            // $table->string('message', 300);
            // $table->dateTime('date_locat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
