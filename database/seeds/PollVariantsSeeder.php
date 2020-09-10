<?php

use Illuminate\Database\Seeder;

class PollVariantsSeeder extends Seeder
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
                'name' => 'Недопустимо ',
                'count' => '30',
                'poll_id' => '1'
            ],
            [
                'name' => 'Плохо',
                'count' => '18',
                'poll_id' => '1'
            ],
            [
                'name' => 'Хорошо',
                'count' => '12',
                'poll_id' => '1'
            ],
            [
                'name' => 'Удовлетворительно',
                'count' => '40',
                'poll_id' => '1'
            ],
            [
                'name' => 'Недопустимо ',
                'count' => '30',
                'poll_id' => '2'
            ],
            [
                'name' => 'Плохо',
                'count' => '18',
                'poll_id' => '2'
            ],
            [
                'name' => 'Хорошо',
                'count' => '12',
                'poll_id' => '2'
            ],
            [
                'name' => 'Удовлетворительно',
                'count' => '40',
                'poll_id' => '2'
            ],
        ];
        
      	DB::table('poll_variants')->insert($data);
    }
}
