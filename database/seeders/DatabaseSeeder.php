<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123123'),
                'user_type' => 'admin',
            ],
            [
                'name' => 'Client',
                'email' => 'client@gmail.com',
                'password' => bcrypt('123123'),
                'user_type' => 'client',
            ],
        ];
        foreach ($user as $key =>$value) {
            User::create($value);
        }
    }
}
