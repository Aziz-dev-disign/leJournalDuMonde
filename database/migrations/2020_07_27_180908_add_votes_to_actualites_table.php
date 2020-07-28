<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVotesToActualitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('actualites', function (Blueprint $table) {
            $table->integer('categorie_id')->unsigned()->nullable()->default(null);
            $table->foreign('categorie_id')->references('id')->on('categorie_actualites')->onUpdate('cascade')->onDelete('set null');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('actualites', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
        });
    }
}
