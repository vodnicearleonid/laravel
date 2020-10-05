<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTirreportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tirreport', function (Blueprint $table) {
            $table->id();
            $table->string('start', 100);
            $table->text('stop');
            $table->string('driver', 255);
            $table->string('truck', 100);
            $table->text('pause');
            $table->string('author', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tirreport');
    }
}
