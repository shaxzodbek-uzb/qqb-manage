<?php

use Illuminate\Database\Seeder;

class ResourceFaqsSeeder extends Seeder
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
                'faqs_id' => '1',
                'resource_id' => '1',
                'resource_type' => 'App\Card'
            ],
            [
                'faqs_id' => '2',
                'resource_id' => '1',
                'resource_type' => 'App\Card'
            ],
            [
                'faqs_id' => '3',
                'resource_id' => '1',
                'resource_type' => 'App\Card'
            ],
            [
                'faqs_id' => '4',
                'resource_id' => '1',
                'resource_type' => 'App\Card'
            ],
            [
                'faqs_id' => '1',
                'resource_id' => '2',
                'resource_type' => 'App\Card'
            ],
            [
                'faqs_id' => '2',
                'resource_id' => '2',
                'resource_type' => 'App\Card'
            ],
            [
                'faqs_id' => '1',
                'resource_id' => '2',
                'resource_type' => 'App\Card'
            ],
            [
                'faqs_id' => '2',
                'resource_id' => '3',
                'resource_type' => 'App\Card'
            ],
            [
                'faqs_id' => '1',
                'resource_id' => '3',
                'resource_type' => 'App\Card'
            ],
            [
                'faqs_id' => '2',
                'resource_id' => '3',
                'resource_type' => 'App\Card'
            ],
        ];
        
      	DB::table('resource_faqs')->insert($data);
    }
}
