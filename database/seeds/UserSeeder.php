<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $data = [
                [
                    'id' => 1,
                    'name' => 'admin',
                    'type' => 'admin',
                    'email' => 'a@a.ru',
                    'password' => bcrypt(12345678),
                ],
                [
                    'id' => 2,
                    'name' => 'user',
                    'type' => 'user',
                    'email' => 'u@u.ru',
                    'password' => bcrypt(12345678),
                ]
            ];
            foreach ($data as $item) {
                \App\User::updateOrCreate(['email' => $item['email']], $item);
            }
    }
}
