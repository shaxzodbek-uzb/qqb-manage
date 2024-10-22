<?php

use Illuminate\Database\Seeder;

class CreditsSeeder extends Seeder
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
                'name' => 'Потребительский кредит',
                'description' => 'На что можно взять кредит',
                'content' => '<p>Кредиты предоставляются для потребительских нужд населения следующих видов товаров и услуг, произведенных в Республике Узбекистан:</p><ul><li><p>Онлайн-консультирование клиента по ипотечному кредиту с целью подачи заявки в Банк (через онлайн-чат и по телефону).</p></li><li><p>Онлайн-поддержка клиентов и партнеров Банка в личном кабинете: доведение заявки на ипотечный кредит до одобрения.</p></li></ul>',
                'image' => '/credits/1.png',
                'term' => '3 года',
                'grace_period' => '3 месяца',
                'amount' => '39 935 370,41 UZS',
            ],
            [
                'name' => 'Микрозайм',
                'description' => 'На что можно взять кредит',
                'content' => '<p>Кредиты предоставляются для потребительских нужд населения следующих видов товаров и услуг, произведенных в Республике Узбекистан:</p><ul><li><p>Онлайн-консультирование клиента по ипотечному кредиту с целью подачи заявки в Банк (через онлайн-чат и по телефону).</p></li><li><p>Онлайн-поддержка клиентов и партнеров Банка в личном кабинете: доведение заявки на ипотечный кредит до одобрения.</p></li></ul>',
                'image' => '/credits/1.png',
                'term' => '3 года',
                'grace_period' => '3 месяца',
                'amount' => '39 935 370,41 UZS',
            ],
            [
                'name' => 'Ипотечные кредиты по ИПСМ',
                'description' => 'На что можно взять кредит',
                'content' => '<p>Кредиты предоставляются для потребительских нужд населения следующих видов товаров и услуг, произведенных в Республике Узбекистан:</p><ul><li><p>Онлайн-консультирование клиента по ипотечному кредиту с целью подачи заявки в Банк (через онлайн-чат и по телефону).</p></li><li><p>Онлайн-поддержка клиентов и партнеров Банка в личном кабинете: доведение заявки на ипотечный кредит до одобрения.</p></li></ul>',
                'image' => '/credits/1.png',
                'term' => '3 года',
                'grace_period' => '3 месяца',
                'amount' => '39 935 370,41 UZS',
            ]
        ];
        
          DB::table('credits')->insert($data);
    }
}
