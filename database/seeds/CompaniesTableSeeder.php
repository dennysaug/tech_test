<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = factory(App\Company::class)->create();
        foreach (\App\Company::all() as $company) {
            $company->contacts()->createMany(
                factory(App\Contact::class,4)->make()->toArray()
            );
        }
    }
}
