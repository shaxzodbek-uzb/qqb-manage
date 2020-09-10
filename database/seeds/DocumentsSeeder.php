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
                'format' => 'PDF',
                'size' => '204.5 KB',
                'type_id' => '1',
                'resource_type' => 'App\Card',
                'resource_id' => '1',
                'document' => ' ' ,
            ],
            [
                'name' => 'Типовой договор',
                'format' => 'PDF',
                'size' => '204.5 KB',
                'type_id' => '2',
                'resource_type' => 'App\Card',
                'resource_id' => '2',
                'document' => ' ' 
            ],
            [
                'name' => 'Регламент интерактивных услуг',
                'format' => 'PDF',
                'size' => '204.5 KB',
                'type_id' => '3',
                'resource_type' => 'App\Credit',
                'resource_id' => '1',
                'document' => ' ' 
            ]
        ];
        
          DB::table('documents')->insert($data);
    }
}
