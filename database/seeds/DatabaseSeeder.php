<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        factory(App\User::class, 50)->create()->each(function($u) {
            $u->posts()->saveMany(factory(App\Post::class, 100)->make());
        });

        Model::reguard();
    }
}
