<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('users')->insert([[
            'name' => 'Jonh Doe',
            'email' => 'johndoe@email.com',
        ], [
            'name' => 'Jane Doe',
            'email' => 'janedoe@email.com',
        ]]);
    }
}
