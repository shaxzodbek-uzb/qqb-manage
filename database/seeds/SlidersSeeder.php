<?php

use Illuminate\Database\Seeder;

class SlidersSeeder extends Seeder
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
                'name' => 'Главный слайдер',
                'slug' => 'home-slider'
            ]
        ];
        
      	DB::table('sliders')->insert($data);
    }
}
