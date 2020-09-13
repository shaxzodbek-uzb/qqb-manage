<?php

use Illuminate\Database\Seeder;

class AdvantagesSeeder extends Seeder
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
                'name' => 'Бесплатное обслуживание',
                'text_advantage' => '0 ₽ в год',
                'icon_image'  => '6',
                'resource_type' => 'App\Card',
                'resource_id' => '1'
            ],
            [
                'name' => 'Пополнение другой картой',
                'text_advantage' => 'Без комиссии от 2000 ₽',
                'icon_image'  => '7',
                'resource_type' => 'App\Card',
                'resource_id' => '1'
            ],
            [
                'name' => 'Платите смартфоном',
                'text_advantage' => 'Добавьте карту в Apple Pay',
                'icon_image'  => '8',
                'resource_type' => 'App\Card',
                'resource_id' => '1'
            ],
            [
                'name' => 'Снятие без комиссии',
                'text_advantage' => '210 точек пополнения.',
                'icon_image'  => '9',
                'resource_type' => 'App\Card',
                'resource_id' => '1'
            ],
            [
                'name' => 'Бесплатное обслуживание',
                'text_advantage' => '0 ₽ в год',
                'icon_image'  => '6',
                'resource_type' => 'App\Card',
                'resource_id' => '2'
            ],
            [
                'name' => 'Пополнение другой картой',
                'text_advantage' => 'Без комиссии от 2000 ₽',
                'icon_image'  => '7',
                'resource_type' => 'App\Card',
                'resource_id' => '2'
            ],
            [
                'name' => 'Платите смартфоном',
                'text_advantage' => 'Добавьте карту в Apple Pay',
                'icon_image'  => '8',
                'resource_type' => 'App\Card',
                'resource_id' => '2'
            ],
            [
                'name' => 'Снятие без комиссии',
                'text_advantage' => '210 точек пополнения.',
                'icon_image'  => '9',
                'resource_type' => 'App\Card',
                'resource_id' => '2'
            ],
            [
                'name' => 'Бесплатное обслуживание',
                'text_advantage' => '0 ₽ в год',
                'icon_image'  => '6',
                'resource_type' => 'App\Card',
                'resource_id' => '3'
            ],
            [
                'name' => 'Пополнение другой картой',
                'text_advantage' => 'Без комиссии от 2000 ₽',
                'icon_image'  => '7',
                'resource_type' => 'App\Card',
                'resource_id' => '3'
            ],
            [
                'name' => 'Платите смартфоном',
                'text_advantage' => 'Добавьте карту в Apple Pay',
                'icon_image'  => '8',
                'resource_type' => 'App\Card',
                'resource_id' => '3'
            ],
            [
                'name' => 'Снятие без комиссии',
                'text_advantage' => '210 точек пополнения.',
                'icon_image'  => '9',
                'resource_type' => 'App\Card',
                'resource_id' => '3'
            ],
            [
                'name' => 'Бесплатное обслуживание',
                'text_advantage' => '0 ₽ в год',
                'icon_image'  => '6',
                'resource_type' => 'App\Card',
                'resource_id' => '4'
            ],
            [
                'name' => 'Пополнение другой картой',
                'text_advantage' => 'Без комиссии от 2000 ₽',
                'icon_image'  => '7',
                'resource_type' => 'App\Card',
                'resource_id' => '4'
            ],
            [
                'name' => 'Платите смартфоном',
                'text_advantage' => 'Добавьте карту в Apple Pay',
                'icon_image'  => '8',
                'resource_type' => 'App\Card',
                'resource_id' => '4'
            ],
            [
                'name' => 'Снятие без комиссии',
                'text_advantage' => '210 точек пополнения.',
                'icon_image'  => '9',
                'resource_type' => 'App\Card',
                'resource_id' => '4'
            ],
        ];
        
      	DB::table('advantages')->insert($data);
    }
}
