<?php

use Illuminate\Database\Seeder;

class CardsSeeder extends Seeder
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
                    'name' => 'Visa Gold',
                    'cover_image' => '/source/cards/card-group.png',
                    'image' => '/source/cards/card-group.png',
                    'description' => '"Кишлок курилиш банк" предоставляет вам уникальную возможность — открыть карты премиум-класса VISA Gold в международной платёжной системе VISA.'
                ],
            ];

            DB::table('cards')->insert($data);
    }
}
