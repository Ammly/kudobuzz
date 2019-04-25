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
        $items = [

            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@email.com',
                'password' => '$2y$10$VBe0VHsPq.IxLZwNwwqMGu3n1jwZ03MhibnhW.zPVU4GyZdpcg7Xi', 'remember_token' => '',
            ],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
