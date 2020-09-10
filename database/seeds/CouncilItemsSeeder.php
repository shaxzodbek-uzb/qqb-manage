<?php

use Illuminate\Database\Seeder;

class CouncilItemsSeeder extends Seeder
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
                'fulname' => 'Ашрафханов Бахром Баходирович',
                'meta' => '<span>Занимаемая должность</span><p> Исполнительный директор внебюджетного пенсионного фонда при Министерстве <br>финансов Республики Узбекистан </p><span>Подтверждающий документ</span><p>Внеочередное общее собрание акционеров банка 2019 год 23 июля Протокол №40</p><span>Номера телефонов:</span><p>(71) 239-11-01</p>',
                'avatar' => '5'
            ],
            [
                'fulname' => 'Берунийский филиал',
                'meta' => '<span>Занимаемая должность</span><p> Исполнительный директор внебюджетного пенсионного фонда при Министерстве <br>финансов Республики Узбекистан </p><span>Подтверждающий документ</span><p>Внеочередное общее собрание акционеров банка 2019 год 23 июля Протокол №40</p><span>Номера телефонов:</span><p>(71) 239-11-01</p>',
                'avatar' => '5'
            ],
            [
                'fulname' => 'Абидов Шерзод Абдусаматович',
                'meta' => '<span>Занимаемая должность</span><p> Исполнительный директор внебюджетного пенсионного фонда при Министерстве <br>финансов Республики Узбекистан </p><span>Подтверждающий документ</span><p>Внеочередное общее собрание акционеров банка 2019 год 23 июля Протокол №40</p><span>Номера телефонов:</span><p>(71) 239-11-01</p>',
                'avatar' => '5'
            ],
            [
                'fulname' => 'Искандаров Эркин Бўриевич',
                'meta' => '<span>Занимаемая должность</span><p> Исполнительный директор внебюджетного пенсионного фонда при Министерстве <br>финансов Республики Узбекистан </p><span>Подтверждающий документ</span><p>Внеочередное общее собрание акционеров банка 2019 год 23 июля Протокол №40</p><span>Номера телефонов:</span><p>(71) 239-11-01</p>',
                'avatar' => '5'
            ],

        ];
        
          DB::table('council_items')->insert($data);
    }
}
