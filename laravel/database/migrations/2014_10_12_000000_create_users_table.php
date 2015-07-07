<?php

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
            $table->increments('id');
            $table->string('firstname');
            $table->string('surname');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(['firstname' => 'Steve', 'surname' => 'Austin', 'email' => 'stonecold@test.com', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        DB::table('users')->insert(['firstname' => 'Eldon', 'surname' => 'Perry', 'email' => 'e.perry@test.com', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        DB::table('users')->insert(['firstname' => 'Herb', 'surname' => 'Brooks', 'email' => 'brooky@test.com', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
