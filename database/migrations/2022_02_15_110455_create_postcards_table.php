<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostcardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postcards', function (Blueprint $table) {

            $table -> id();

            $table -> string('sender', 60);
            $table -> string('address');
            $table -> text('text') -> nullable();
            $table -> string('image') -> nullable();

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postcards');
    }
}
