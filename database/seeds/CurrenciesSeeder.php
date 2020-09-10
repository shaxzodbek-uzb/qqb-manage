<?php

use Illuminate\Database\Seeder;

class CurrenciesSeeder extends Seeder
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
                'name' => 'So`m',
                'slug' => 'sum',
                'symbol' => 'sum',
                'value' => '1030'
            ],
            [
                'name' => 'Dollor',
                'slug' => 'dollor',
                'symbol' => '$',
                'value' => '1'
            ],
            [
                'name' => 'Рубл',
                'slug' => 'rubl',
                'symbol' => 'rubl',
                'value' => '113'
            ]
        ];
        
          DB::table('currencies')->insert($data);
    }
}
