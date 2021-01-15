<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->id();

            // $table->unsignedBigInteger('usr_first');
            // $table->foreign('usr_first')->references('id')->on('users');
            // $table->unsignedBigInteger('usr_second');
            // $table->foreign('usr_second')->references('id')->on('users');

            // $table->primary(['usr_first','usr_second']);
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
        Schema::dropIfExists('chats');
    }
}
