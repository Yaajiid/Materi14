<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCastsTable extends Migration
{
    public function up()
    {
        Schema::create('casts', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('umur');
            $table->text('bio');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('casts');
    }
}
