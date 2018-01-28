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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        // Insert some stuff
        // DB::table('users')->insert(
        //     array(
        //         array(
        //             'name' => 'user1',
        //             'email' => 'user1@domain.com',
        //             'password' => 'user1',
        //         ),
        //         array(
        //             'name' => 'user2',
        //             'email' => 'user2@domain.com',
        //             'password' => 'user2',
        //         )
        //     )
        // );
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
