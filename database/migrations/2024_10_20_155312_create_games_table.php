<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('title');
            $table->string('genre')->nullable();
            $table->decimal('price', 8, 2); // price with 2 decimal places
            $table->string('image')->nullable(); // Column to store image path
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('games');
    }
}
