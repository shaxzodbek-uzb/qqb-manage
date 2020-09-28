<?php

use Illuminate\Database\Seeder;

class ResourceDetailsSeeder extends Seeder
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
                'name' => 'Банковские услуги по открытию карты:',
                'text' => 'Бесплатно',
                'is_main' => '1',
                'resource_type' => 'App\Card',
                'resource_id' => '1',
                'icon' => ''
            ],
            [
                'name' => 'Срок действия:',
                'text' => '3 года',
                'is_main' => '1',
                'resource_type' => 'App\Card',
                'resource_id' => '1',
                'icon' => ''
            ],
            [
                'name' => 'Необходимые документы:',
                'text' => 'Оригинал паспорта; ИНН; Применение; контракт',
                'is_main' => '1',
                'resource_type' => 'App\Card',
                'resource_id' => '1',
                'icon' => ''
            ],
            [
                'name' => 'Срок действия:',
                'text' => '3 года',
                'is_main' => '1',
                'resource_type' => 'App\Card',
                'resource_id' => '2',
                'icon' => ''
            ],
            [
                'name' => 'Банковские услуги по открытию карты:',
                'text' => 'Бесплатно',
                'is_main' => '1',
                'resource_type' => 'App\Card',
                'resource_id' => '2',
                'icon' => ''
            ],
            [
                'name' => 'Срок действия:',
                'text' => '3 года',
                'is_main' => '1',
                'resource_type' => 'App\Card',
                'resource_id' => '2',
                'icon' => ''
            ],

            [
                'name' => 'Банковские услуги по открытию карты:',
                'text' => 'Бесплатно',
                'is_main' => '1',
                'resource_type' => 'App\Card',
                'resource_id' => '3',
                'icon' => ''
            ],
            [
                'name' => 'Срок действия:',
                'text' => '3 года',
                'is_main' => '1',
                'resource_type' => 'App\Card',
                'resource_id' => '1',
                'icon' => ''
            ],
            [
                'name' => 'Необходимые документы:',
                'text' => 'Оригинал паспорта; ИНН; Применение; контракт',
                'is_main' => '1',
                'resource_type' => 'App\Card',
                'resource_id' => '3',
                'icon' => ''
            ],
            [
                'name' => 'Срок действия:',
                'text' => '3 года',
                'is_main' => '1',
                'resource_type' => 'App\Card',
                'resource_id' => '4',
                'icon' => ''
            ],
            [
                'name' => 'Банковские услуги по открытию карты:',
                'text' => 'Бесплатно',
                'is_main' => '1',
                'resource_type' => 'App\Card',
                'resource_id' => '4',
                'icon' => ''
            ],
            [
                'name' => 'Срок действия:',
                'text' => '3 года',
                'is_main' => '1',
                'resource_type' => 'App\Card',
                'resource_id' => '4',
                'icon' => ''
            ],
        ];
        
      	DB::table('resource_details')->insert($data);
    }
}
