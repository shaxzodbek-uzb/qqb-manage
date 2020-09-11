<?php

use Illuminate\Database\Seeder;

class SlidesSeeder extends Seeder
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
                'name' => 'Кредиты для физических лиц',
                'description' => 'Ипотечные кредиты по ИПСМ',
                'image' => '10',
                'slider_id' => '1'
            ],
            [
                'name' => 'Кредиты для физических лиц',
                'description' => 'Ипотечные кредиты по ИПСМ',
                'image' => '10',
                'slider_id' => '1'
            ],
        ];
        
      	DB::table('slides')->insert($data);
    }
}
