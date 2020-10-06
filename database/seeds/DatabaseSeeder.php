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
        // $this->call(UserSeeder::class);
        //$this->call(ArticlesSeeder::class);
        //$this->call(HomeworkSeeder::class);
        //$this->call(TirreportSeeder::class);
        //$this->call(CarSeeder::class);
        //$this->call(SsdSeeder::class);
        $this->call(GadgetsSeeder::class);
    }
}
