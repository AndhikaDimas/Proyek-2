<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantWateringsTable extends Migration
{
    public function up()
    {
        Schema::create('plant_waterings', function (Blueprint $table) {
            $table->id();
            $table->string('time'); // Kolom untuk waktu penyiraman
            $table->string('status'); // Kolom untuk status penyiraman
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('plant_waterings');
    }
}
