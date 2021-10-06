<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('number')->nullable();
            $table->string('address')->nullable();
            $table->string('experience')->nullable();
            $table->string('photo')->nullable();
            $table->string('salary')->nullable();
            $table->string('vacation')->nullable();
            $table->string('city')->nullable();
            $table->string('password')->nullable();
            $table->string('status')->default('0');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
