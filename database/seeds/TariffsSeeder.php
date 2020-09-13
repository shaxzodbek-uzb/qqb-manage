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
                'name' => 'Открытие и ведение банковских счетов, счетов по вкладам'
            ],
            [
                'name' => 'Открытие и ведение банковских счетов, счетов по вкладам 123'
            ]
        ];
        
      	DB::table('tariffs')->insert($data);
    }
}
