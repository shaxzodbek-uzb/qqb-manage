<?php

use Illuminate\Database\Seeder;

class DocumentTypesSeeder extends Seeder
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
                'name' => 'Договор',
                'slug' => 'dogovor'
            ],
            [
                'name' => 'Типовой договор',
                'slug' => 'dollor'
            ],
            [
                'name' => 'Регламент интерактивных услуг',
                'slug' => 'reglament'
            ],
            [
                'name' => 'Указы и программы, принятые Президентом Республики Узбекистан',
                'slug' => 'programmi'
            ],
            [
                'name' => 'Постановление Кабинета Министров',
                'slug' => 'postanovlenie'
            ],
            [
                'name' => 'Банковское законодательство',
                'slug' => 'zakonodatelstva'
            ]
        ];
        
          DB::table('document_types')->insert($data);
    }
}
