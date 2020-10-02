<?php

use Illuminate\Database\Seeder;
use app\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1MOD.

    /*DB::insert('INSERT INTO `articles` (`name`,`text`,`img`) VALUE (?,?,?)',
        [
            `Blog post`,
            `<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>`,
            `pic.jpg`,
        ]);*/

    //2MOD.

    DB::table('articles')->insert(
        [
            ['name'=>"Sample Blog Post1", 'text'=>"<p>1The point of using Lorem Ipsum is that it has a more-or-less1</p>", 'img'=>'pic2.jpg'],
            ['name'=>"Sample Blog Post2", 'text'=>"<p>2The point of using Lorem Ipsum is that it has a more-or-less2</p>", 'img'=>'pic3.jpg'],
        ]
    );

    //3MOD.

    Article::create([
        'name'=>'Sample blog 3',
        'text'=>'Hello world',
        'img'=>'pic4.jpg',
    ]);

    }
}
