<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacts = factory(App\Contact::class)
            ->create()
            ->each(function ($contact) {
                $contact->notes()->createMany(
                    factory(\App\Note::class,2)->make()->toArray()
                );
            });
    }
}
