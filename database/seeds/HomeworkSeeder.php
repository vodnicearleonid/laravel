<?php

use Illuminate\Database\Seeder;
use app\Homework;

class HomeworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('homework')->insert(
            [
                ['title'=>"Sample Blog about Sherlock_1", 'description'=>"<p>1_Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>", 'author'=>'Sherlock_1'],
                ['title'=>"Sample Blog about Sherlock_2", 'description'=>"<p>2_Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>", 'author'=>'Sherlock_2'],
                ['title'=>"Sample Blog about Sherlock_3", 'description'=>"<p>3_Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>", 'author'=>'Sherlock_3'],
            ]
        );
    }
}
