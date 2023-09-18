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
        Schema::create('reservers', function (Blueprint $table) {
            $table->id();
            $table->string('matricule', 15);
            $table->string('marque', 50);
            $table->string('modele', 50);
            $table->decimal('prix', 8, 2);
            $table->string('nom', 20);
            $table->string('cin', 20);
            $table->string('permis', 20);
            $table->string('adresse', 200);
            $table->integer('tele');
            $table->integer('gsm');
            $table->date('dateDebut');
            $table->smallInteger('duree');
            $table->string('message', 250);
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservers');
    }
};
