<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_apps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->integer('harga');
            $table->integer('pages')->default(1);
            $table->integer('duration')->default(1);
            $table->enum('publish', [0, 1]);
            $table->bigInteger('play_id');
            $table->enum('connectivity', [0, 1]);
            $table->integer('freeEditPage')->default(1);
            $table->integer('troubleshooting')->default(1);
            $table->enum('storage', [0, 1, 2]);
            $table->enum('offline', [0, 1]);
            $table->enum('online', [0, 1]);
            $table->enum('admin', [0, 1]);
            $table->integer('language')->default(1);
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
        Schema::dropIfExists('paket_apps');
    }
}
