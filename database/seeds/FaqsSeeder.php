<?php

use Illuminate\Database\Seeder;

class FaqsSeeder extends Seeder
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
                'question' => 'Могу ли я получить кредит, если у меня нет официальных доходов?',
                'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium numquam maiores autem labore non eum officia aperiam, totam nostrum quo minus ducimus et ipsam perferendis? Quam eligendi corrupti quasi excepturi!'
            ],
            [
                'question' => 'Необходимо ли предоставить банку справки или выписки со счета о моих доходах?',
                'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium numquam maiores autem labore non eum officia aperiam, totam nostrum quo minus ducimus et ipsam perferendis? Quam eligendi corrupti quasi excepturi!'
            ],
            [
                'question' => 'Как быстро банк рассматривает онлайн заявку на предоставление кредита?',
                'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium numquam maiores autem labore non eum officia aperiam, totam nostrum quo minus ducimus et ipsam perferendis? Quam eligendi corrupti quasi excepturi!'
            ]
        ];
        
          DB::table('faqs')->insert($data);
    }
}
