<?php

use Illuminate\Database\Seeder;

class VacanciesSeeder extends Seeder
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
                'name' => 'Клиентский менеджер (ипотечное направление)',
                'region' => 'в Ташкенте',
                'phones' => '+998 (78) 150 10 01 +998 (78) 150 93 39',
                'email'  => 'email@mail.ru',
                'address' => 'uzbekistan, 100011, г. Ташкент, ул А. Навои, 18А'
            ],
            [
                'name' => 'Web-дизайнер',
                'region' => 'в Ташкенте',
                'phones' => '+99896655685',
                'email'  => 'email@mail.ru',
                'address' => 'uzbekistan, 100011, г. Ташкент, ул А. Навои, 18А'
            ],
            [
                'name' => 'Начальник отдела кредитования юридических лиц',
                'region' => 'в Ташкенте',
                'phones' => '+99896655685',
                'email'  => 'email@mail.ru',
                'address' => 'uzbekistan, 100011, г. Ташкент, ул А. Навои, 18А'
            ],
            [
                'name' => 'Бухгалтер по расчету заработной платы',
                'region' => 'в Ташкенте',
                'phones' => '+99896655685',
                'email'  => 'email@mail.ru',
                'address' => 'uzbekistan, 100011, г. Ташкент, ул А. Навои, 18А'
            ]
        ];
        
      	DB::table('vacancies')->insert($data);
    }
}
