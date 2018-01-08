<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->uuid('id')->primary();
            $table->string('title')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('is_verified')->default(1);
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('prof_pic')->nullable();
            $table->integer('status')->default(0);
            $table->string('username')->nullable()->unique();
            $table->integer('verified')->default(1);
            $table->string('user_code')->nullable();
            $table->string('qr_password')->nullable();
            $table->char('api_token', 60)->nullable();
            $table->enum('role',['Student','Parent','Teacher','Leader'])->default('Teacher');
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
