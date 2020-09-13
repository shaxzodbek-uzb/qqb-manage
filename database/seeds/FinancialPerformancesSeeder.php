<?php

use Illuminate\Database\Seeder;

class FinancialPerformancesSeeder extends Seeder
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
                'year' => '2009 год',
                'definition' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. '
            ],
            [
                'year' => '2010 год',
                'definition' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. '
            ],
            [
                'year' => '2011 год',
                'definition' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. '
            ]
        ];
        
      	DB::table('financial_performances')->insert($data);
    }
}
