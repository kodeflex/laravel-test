<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'admin',
          'email' => 'admin@api.dev',
          'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
          'client_id' => 1,
          'remember_token' => str_random(10)
      ]);

      // Mock data
      factory(App\User::class, 50)->create()->each(function ($u) {
          $u->posts()->save(factory(App\Post::class)->make());
      });
    }
}
