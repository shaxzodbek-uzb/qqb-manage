<?php

use Illuminate\Database\Seeder;

class BranchesSeeder extends Seeder
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
        		'region' => 'Каракалпакский региональный филиал Заполнить заявку',
        		'director' => 'Ещанов Атабек Муратбаевич',
        		'addres' => 'Адрес: 239000, г. Нукус, ул. Каракалпакстан, 28 А',
        		'phone'  => '(361) 770-61-66, 223-72-19',
        		'email'	 => 'info.qoraqalpogiston@qqb.uz',
        		'long'  => '12',
        		'lat'  => '12'
        	],
        	[
        		'region' => 'Берунийский филиал',
        		'director' => 'Сапаев Мухамадали Махсудович',
        		'addres' => '230200, г. Беруни, ул. Халклар Дустлиги, 10',
        		'phone'  => '(361) 770-61-66, 223-72-19',
        		'email'	 => 'info.qoraqalpogiston@qqb.uz',
        		'long'  => '12',
        		'lat'  => '12'
        	],

        ];
        
          DB::table('branches')->insert($data);
    }
}
