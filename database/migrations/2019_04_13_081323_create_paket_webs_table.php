<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketWebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_webs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->integer('harga');
            $table->integer('freeDomain')->default(0);
            $table->integer('freeSubdomain')->default(0);
            $table->integer('pages')->default(1);
            $table->integer('seo')->default(1);
            $table->integer('duration')->default(1);
            $table->integer('freeEditPage')->default(1);
            $table->integer('troubleshooting')->default(3);
            $table->enum('responsive', [0, 1])->default(0);
            $table->enum('ftp', [0, 1])->default(0);
            $table->enum('slideshow', [0, 1])->default(0);
            $table->enum('cms', [0, 1])->default(0);
            $table->enum('ssl', [0, 1])->default(0);
            $table->enum('login', [0, 1])->default(0);
            $table->enum('siteSearch', [0, 1])->default(0);
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
        Schema::dropIfExists('paket_webs');
    }
}
