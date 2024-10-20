<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalsTable extends Migration
{
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('customer_id')->constrained()->onDelete('cascade'); // Foreign key to customers
            $table->foreignId('game_id')->constrained()->onDelete('cascade'); // Foreign key to games
            $table->date('rental_date');
            $table->date('return_date')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rentals');
    }
}
