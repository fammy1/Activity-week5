<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
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
                'name' =>'Levi Ackerman',
                'address' =>'Wall Maria',
                'phone' =>'09321343234',
                'capitalization' =>40000,
                'loan' => 30000
            ],
            [
                'name' =>'Eren Jaeger',
                'address' =>'Tokyo, Japan',
                'phone' =>'09765826153',
                'capitalization' =>20000,
                'loan' => 15000
            ],
            [
                'name' =>'Armin Arlert',
                'address' =>'Wall Rose',
                'phone' =>'0983172318',
                'capitalization' =>50000,
                'loan' => 15000

            ]
        ];

        foreach($data as $client){
            \App\Client::create($client);
        }

        }
}
