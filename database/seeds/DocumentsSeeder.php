<?php

use Illuminate\Database\Seeder;

class DocumentsSeeder extends Seeder
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
                'name' => 'Пользование банкоматами',
                'type_id' => '1',
                'active' =>'1',
                'resource_type' => 'App\Card',
                'resource_id' => '1',
                'document' => ' ' ,
            ],
            [
                'name' => 'Типовой договор',
                'type_id' => '2',
                'active' =>'1',
                'resource_type' => 'App\Card',
                'resource_id' => '2',
                'document' => ' ' 
            ],
            [
                'name' => 'Регламент интерактивных услуг',
                'type_id' => '3',
                'active' =>'1',
                'resource_type' => 'App\Credit',
                'resource_id' => '1',
                'document' => ' ' 
            ]
        ];
        
          DB::table('documents')->insert($data);
    }
}
