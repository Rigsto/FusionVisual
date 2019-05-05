<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meet_us', function (Blueprint $table) {
//            $table->bigInteger('user_id')->nullable();
            $table->date('dateMeet');
            $table->time('timeMeet');
            $table->string('name');
            $table->string('email');
            $table->enum('methodmeet',['online','offline']);
            $table->string('phoneOrSkype');
            $table->string('placeMeet', 100);
            $table->enum('topics', ['design','web','app']);
            $table->text('notes')->nullable();
            $table->bigInteger('admin_id')->nullable();
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
        Schema::dropIfExists('meet_us');
    }
}
