<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $api_token = Str::random(80);

        \App\User::create([
            'name'      => 'Dennys Oliveira',
            'email'     => 'dennysaug@gmail.com',
            'password'  => bcrypt('root'),
            'api_token' => $api_token
        ]);

        echo "\nAUTH API_TOKEN: {$api_token}\n";
    }
}
