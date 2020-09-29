<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (Schema::hasTable('articles')){

            Schema::table('articles', function (Blueprint $table) {
                //

                if (!Schema::hasColumn('alias')){
                    $table->string('alias',100);
                }

            });

        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            //

            $table->dropColumn('alias');

        });
    }
}
