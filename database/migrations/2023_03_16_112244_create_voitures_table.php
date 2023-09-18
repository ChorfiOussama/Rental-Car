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
        Schema::create('voitures', function (Blueprint $table) {
            $table->id();
            $table->string('matricule')->unique();
            $table->string('marque');
            $table->string('image');
            $table->decimal('prix', 8, 2);
            $table->string('carburant');
            $table->string('transmission');
            $table->string('stereo');
            $table->string('climatisation');
            $table->integer('maxpassagers');
            $table->integer('bagages');
            $table->string('dispo');
            $table->integer('desPortes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voitures');
    }
};
