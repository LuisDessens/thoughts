<?php

use App\User;
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
        User::create([
            'name' => 'Luis Dessens',
            'email' => 'ld@thought.com',
            'password' => bcrypt('secret')
        ]);
    }
}
