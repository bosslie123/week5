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
                'name' => 'Healer',
                'address' => 'Shiela',
                'phone' => '091928374662',
                'capitalization' => 20000,
                'loan' => 10000
            ],
            [
                'name' => 'Runner',
                'address' => 'Kiado',
                'phone' => '98237721',
                'capitalization' => 40000,
                'loan' => 300000
            ],
            [
                'name' => 'Dragon',
                'address' => 'Tower',
                'phone' => '09123884753',
                'capitalization' => 50000,
                'loan' => 500000
            ],
        ];

        foreach($data as $client) {
            \App\Client::create($client);
        }
    }
}
