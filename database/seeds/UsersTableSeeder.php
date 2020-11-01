<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new GuzzleHttp\Client();




        \App\User::create([
            'name'      => 'Dennys Oliveira',
            'email'     => 'dennysaug@gmail.com',
            'password'  => bcrypt('root')
        ]);

        $form_params = [
            'email' => 'dennysaug@gmail.com',
            'password' => 'root'
        ];

        try {
            // php artisan serve
            $res = $client->request('POST', "http://localhost:8000/api/auth/login", [
                'form_params' => $form_params
            ]);

        } catch(\GuzzleHttp\Exception\ConnectException $e)  {
            // docker-compose up --build
            if($e->getHandlerContext()['errno'] == 7) {
                $res = $client->request('POST', "http://web:8000/api/auth/login", [
                    'form_params' => $form_params
                ]);
            }
        }
        if(isset($res) && ($res->getStatusCode() == 200) ) {


            $json = (array)json_decode($res->getBody());

            if (isset($json['access_token']) & !is_null($json['access_token'])) {
                echo "\n";
            dump([
                'Authorization' => $json['token_type'] . ' ' . $json['access_token']
            ]);
            echo "\n";
            }

        }


    }
}
