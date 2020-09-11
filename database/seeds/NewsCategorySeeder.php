<?php

use Illuminate\Database\Seeder;

class NewsCategorySeeder extends Seeder
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
                'name' => 'Новости',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit'
            ],
            [
                'name' => 'Мероприятия и Тендеры',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit'
            ],
            [
                'name' => 'Объявления',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit'
            ],
            [
                'name' => 'Аудио и видео',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit'
            ],
        ];

        DB::table('news_category')->insert($data);
    }
}
