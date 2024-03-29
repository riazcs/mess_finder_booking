<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->date('meal_date');
            $table->unsignedBigInteger('mess_id');
            $table->boolean('morning')->default(false)->nullable(); // Whether the meal is active or not
            $table->boolean('noon')->default(false)->nullable(); // Whether the meal is active or not
            $table->boolean('night')->default(false)->nullable(); // Whether the meal is active or not
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
        Schema::dropIfExists('meals');
    }
};
