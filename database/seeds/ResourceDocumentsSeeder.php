<?php

use Illuminate\Database\Seeder;

class ResourceDocumentsSeeder extends Seeder
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
                'resource_id' => '1',
                'resource_type' => 'App\Card',
                'document_id' => '1'
            ],
            [
                'resource_id' => '1',
                'resource_type' => 'App\Card',
                'document_id' => '2'
            ],
            [
                'resource_id' => '2',
                'resource_type' => 'App\Card',
                'document_id' => '1'
            ],
            [
                'resource_id' => '3',
                'resource_type' => 'App\Card',
                'document_id' => '2'
            ]
        ];
        
      	DB::table('resource_documents')->insert($data);
    }
}
