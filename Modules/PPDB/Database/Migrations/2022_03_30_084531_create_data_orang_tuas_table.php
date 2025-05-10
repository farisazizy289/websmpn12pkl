<?php

namespace Modules\PPDB\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataOrangTuasTable extends Migration
{
    public function up()
    {
        Schema::create('data_orang_tuas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_orang_tuas');
    }
}
