<?php

use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
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
                'name' => 'Депозиты',
                'description' => 'АКБ «Кишлок курилиш банк» предлагает юридическим лицам размещать свободные денежные средства на срочные депозиты.',
                'content' => '<p>АКБ «Кишлок курилиш банк» предлагает юридическим лицам размещать свободные денежные средства на срочные депозиты.</p><div class="deposit-table"><table class="table w-100"><thead class="table-thead"><tr><th style="width: 175px;">Срок депозита</th><th>Валюта депозита</th><th>Годовая процентная ставка</th></tr></thead><tbody class="table-tbody"><tr><td>от 180 до 365 дня</td><td>Сум</td><td>СР*</td></tr><tr><td> от 366 дней до 730 дней </td><td>Сум</td><td>До СР*+1</td></tr><tr><td>от 731 дней и более</td><td>Сум</td><td>До СР*+2</td></tr></tbody></table></div><p>*СР- действующая ставка рефинансирования Центрального банка Республики Узбекистан.</p><p>Условия депозита определяются исходя из текущей позиции банка в области привлечения и размещения ресурсов. Правление АКБ «Кишлок курилиш банк» гарантирует своевременное исполнение взятых на себя обязательств по выплате процентов и основного долга.</p><p>Подробную информацию вы можете получить в департаменте Казначейства по телефону:</p><b>+99878 150 78 83, +99871 241 41 46</b>',
                'by_form' => '0',
                'template_form' => '0'
            ],
            [
                'name' => 'Международные денежные переводы.',
                'description' => 'В АКБ “Кишлок курилиш банк” для осуществления международных трансграничных переводов по системам Золотая корона, WesternUnion, MoneyGram, Contact, Ria и Азия Экспресс организованы 43 пунктов ( перечень пунктов с дислокацией) обслуживания клиентов.',
                'content' => '<p> В АКБ “Кишлок курилиш банк” для осуществления международных трансграничных переводов по системам Золотая корона, WesternUnion, MoneyGram, Contact, Ria и Азия Экспресс организованы 43 пунктов ( <a href="/" class="router-link-active">перечень пунктов с дислокацией</a>) обслуживания клиентов. </p><p> Пункты международных трансграничных денежных переводов предназначены для осуществления быстрых переводов денежных средств в иностранной валюте с использованием современных средств связи и предоставляет следующие виды услуг физическим лицам - гражданам Республики Узбекистан, иностранным гражданам, а также лицам без гражданства, находящимся на территории Республики Узбекистан: </p><div class="about-credit-need"><ul><li><p> Выплата трансграничных денежных переводов; - отправление трансграничных денежных переводов; - другие услуги, предоставляемые системами. </p></li></ul></div><p> Приём и выдача денежных средств при осуществлении переводов производятся в наличной и безналичной (в том числе с использованием пластиковых карт) формах, в долларах США и Евро. Кроме того, платежи, по желанию клиента, полностью или частично могут осуществляться в национальной валюте. </p><div class="gallery-transfer d-flex f-wrap"><div class="gallery-transfer-items rounded"><div class="gallery-transfer-aspect"><img src="/img/img-27.8e317984.png" alt="" class="p-absolute w-100 h-100"><span class="p-absolute text-white d-block w-100 text-center">Ria</span></div></div><div class="gallery-transfer-items rounded"><div class="gallery-transfer-aspect"><img src="/img/img-28.a27a303f.png" alt="" class="p-absolute w-100 h-100"><span class="p-absolute text-white d-block w-100 text-center">Western Union</span></div></div></div>',
                'by_form' => '0',
                'template_form' => '0'
            ],
            [
                'name' => 'Заявка на кредитный отпуск для юридических лиц',
                'description' => 'Введите соответствующую информацию, чтобы подать заявку',
                'content' => '<h1> Заявка на кредитный отпуск для юридических лиц </h1><b>Уважаемый клиент!</b><p>Вам нужно заполнить электронную форму заявления, чтобы подать заявку на кредитный отпуск.</p><a href="/" class="download-wrap d-flex align-center router-link-active"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAABHNCSVQICAgIfAhkiAAAAIFJREFUKFPNkt0NgCAMhK+OIAuZwB4yim6ic6iJC+EKNf6gtKLP9u2afuHKlaCKR8Npi1wgoX8K8GQ8GPVpr1I2510TerKhuxbisewAipD+ip7c4g8uqTzE1/AD2BoSksNZ4IaAaOMzB52L1vsOPJQNCoiEcyDZpT0AdQ5vr2xnsgJAbjYNbzYvtQAAAABJRU5ErkJggg==" alt=""><span>Скачать форму заявки</span></a><div style="margin-top: 30px; font-family: var(--regular);"><p>Введите соответствующую информацию, чтобы подать заявку!</p></div>',
                'by_form' => '1',
                'template_form' => '1'
            ],
            [
                'name' => 'Анонимное Обращние',
                'description' => 'В АКБ “Кишлок курилиш банк” для осуществления международных трансграничных переводов по системам Золотая корона, WesternUnion, MoneyGram, Contact, Ria и Азия Экспресс организованы 43 пунктов ( перечень пунктов с дислокацией) обслуживания клиентов.',
                'content' => '<p>Примерная форма анонимного обращения для содействия в решении вопросов предотвращения и недопу-щения бюрократизма и волокиты, в обеспечении предоставле-ния банковских услуг согласно принципов, основанных на честности, бескорыст-ности и справедливости, а также, для содействия предотвращения злоупотребления служебным положением для получения личной выгоды или для удовлетворения противозаконных интересов других лиц, которые порождают затруднение клиентам, при пользовании услугами банка</p>',
                'by_form' => '1',
                'template_form' => '2'
            ],
        ];
        
      	DB::table('pages')->insert($data);
    }
}
