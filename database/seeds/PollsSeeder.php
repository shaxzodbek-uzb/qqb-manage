<?php

use Illuminate\Database\Seeder;

class PollsSeeder extends Seeder
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
                'name' => 'Пожалуйста, оцените услугу нашего Колл-центр',
                'count' => '65'
            ],
            [
                'name' => 'Какие виды банковских услуг Qishloq Qurilish Bank? больше заинтересованы',
                'count' => '88'
            ]
        ];
        
      	DB::table('polls')->insert($data);
    }
}
