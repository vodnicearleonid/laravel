<?php

use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car')->insert(
            [
                ['producer' => "Mercedes", 'body' => "Sedan", 'color' => "reed", 'wheels' => 4, 'doors' => 3 ],
                ['producer' => "BMW", 'body' => "Coupe", 'color' => "Galben", 'wheels' => 4, 'doors' => 5 ],
                ['producer' => "Audi", 'body' => "Universal", 'color' => "Green", 'wheels' => 4, 'doors' => 2 ],

            ]
        );
    }
}
