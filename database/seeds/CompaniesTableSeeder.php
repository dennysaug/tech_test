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
        $companies = factory(App\Company::class,3)
            ->create()
            ->each(function ($company) {
                $company->contacts()->createMany(
                    factory(\App\Contact::class,3)->make()->toArray()
                );
                $contacts = \App\Contact::all();
                foreach($contacts as $contact) {
                    $contact->notes()->createMany(factory(App\Note::class,1)->make()->toArray());
                }
            });
    }
}
