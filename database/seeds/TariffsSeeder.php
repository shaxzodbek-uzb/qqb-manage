<?php

use Illuminate\Database\Seeder;

class TariffsSeeder extends Seeder
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
                'name' => [
                    "ru" => 'Открытие и ведение банковских счетов, счетов по вкладам',
                    "uz" => 'Открытие и ведение банковских счетов, счетов по вкладам',
                    "en" => 'Открытие и ведение банковских счетов, счетов по вкладам',
                ]
            ]
        ];
        
      	DB::table('tariffs')->insert($data);
    }
}
