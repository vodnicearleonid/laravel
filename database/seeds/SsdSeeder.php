<?php

use Illuminate\Database\Seeder;

class SsdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ssd')->insert(
            [
                ['video' => " video, video, video - Mercedes ", 'photo' => "photo, photo, photo - Sedan", 'audio' => "audio, audio, audio - reed", 'text' => "text, text, text 1...", 'author' => "author - LEO" ],
                ['video' => " video, video, video - BMW ", 'photo' => "photo, photo, photo - Universal", 'audio' => "audio, audio, audio - green", 'text' => "text, text, text 2...", 'author' => "author - TEO" ],
                ['video' => " video, video, video - AUDI ", 'photo' => "photo, photo, photo - Coupe", 'audio' => "audio, audio, audio - galben", 'text' => "text, text, text 3...", 'author' => "author - GEO" ],
            ]
        );
    }
}
