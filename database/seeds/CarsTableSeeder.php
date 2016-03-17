<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    private $car_names = [
        'BMW',
        'Mercedes',
        'Audi',
        'Ford',
        'Yugo',
        'Zastava'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('cars')->insert(
                [
                    [
                        'name' => $this->car_names[array_rand($this->car_names)],
                        'user_id' => $i,
                    ],
                    [
                        'name' => $this->car_names[array_rand($this->car_names)],
                        'user_id' => $i,
                    ],
                    [
                        'name' => $this->car_names[array_rand($this->car_names)],
                        'user_id' => $i,
                    ]
                ]
            );
        }
    }
}
