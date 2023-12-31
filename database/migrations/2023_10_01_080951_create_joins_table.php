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
        Schema::create('joins', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('placeOfBirth')->nullable();
            $table->dateTime('birthday');
            $table->string('gender')->nullable();
            $table->string('academicAchievement')->nullable();
            $table->string('address')->nullable();
            $table->string('phone');
            $table->string('voterCardNumber')->nullable();
            $table->string('accountScoial')->nullable();
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
        Schema::dropIfExists('joins');
    }
};
