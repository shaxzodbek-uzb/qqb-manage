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
                    'cover_image' => '1',
                    'image' => '2',
                    'description' => '"Кишлок курилиш банк" предоставляет вам уникальную возможность — открыть карты премиум-класса VISA Gold в международной платёжной системе VISA.'
                ],
                [
                    'name' => 'Kobeydjing (UnionPay)',
                    'cover_image' => '1',
                    'image' => '2',
                    'description' => '"Кишлок курилиш банк" предоставляет вам уникальную возможность — открыть карты премиум-класса VISA Gold в международной платёжной системе VISA.'
                ],
                [
                    'name' => 'Uzcard',
                    'cover_image' => '1',
                    'image' => '2',
                    'description' => '"Кишлок курилиш банк" предоставляет вам уникальную возможность — открыть карты премиум-класса VISA Gold в международной платёжной системе VISA.'
                ],
                [
                    'name' => 'HUMO (VISA)',
                    'cover_image' => '1',
                    'image' => '2',
                    'description' => '"Кишлок курилиш банк" предоставляет вам уникальную возможность — открыть карты премиум-класса VISA Gold в международной платёжной системе VISA.'
                ],
            ];

            DB::table('cards')->insert($data);
    }
}