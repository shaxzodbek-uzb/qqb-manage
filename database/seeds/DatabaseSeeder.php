<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(BankHistoriesSeeder::class);
        $this->call(BranchesSeeder::class);
        $this->call(CardsSeeder::class);
        $this->call(CreditsSeeder::class);
        $this->call(CurrenciesSeeder::class);
        $this->call(DocumentsSeeder::class);
        $this->call(DocumentTypesSeeder::class);
        $this->call(FaqsSeeder::class);
        $this->call(FinancialPerformancesSeeder::class);
        $this->call(NewsCategorySeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(NovaMediaLibrary::class);
        $this->call(PagesSeeder::class);
        $this->call(PerformanceAttributesSeeder::class);
        $this->call(PollsSeeder::class);
        $this->call(PollVariantsSeeder::class);
        $this->call(ResourceDetailsSeeder::class);
        $this->call(ResourceDocumentsSeeder::class);
        $this->call(ResourceFaqsSeeder::class);
        $this->call(SlidersSeeder::class);
        $this->call(SlidesSeeder::class);
        $this->call(TariffsSeeder::class);
        $this->call(TariffAttributesSeeder::class);
        $this->call(VacanciesSeeder::class);
        $this->call(VacancyDetailsSeeder::class);
        $this->call(AdvantagesSeeder::class);
    }
}
