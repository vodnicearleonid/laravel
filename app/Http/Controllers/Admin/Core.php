<?php

namespace app\Http\Controllers\Admin;

use Illuminate\Http\Request;
use app\Http\Controllers\Controller;
use DB;

class Core extends Controller
{
    //protected static $articles;

    public function __construct(){
        //$this->middleware('mymiddle');
    }

   /* public static function addArticles($array){
        return self::$articles[] = $array;
    }*/

    //lista cu materiale
    public function getArticles(){
        //$articles = DB::table('gadgets')->get();
        //$articles = DB::table('gadgets')->get()->first();
        //$articles = DB::table('gadgets')->value('color');
        //$articles = DB::table('gadgets')->pluck('color');
        //$articles = DB::table('articles')->count();
        //$articles = DB::table('articles')->max('id');
        $articles = DB::table('gadgets')->select('id','processor','price')->get();

        /*DB::table('gadgets')->chunk(2, function ($articles){
            foreach ($articles as $article){
                Core::addArticles($article);
            }
        });
        dump(self::$articles);*/ //->orderBy(???)

        dump($articles);
    }

    //lista cu articol
    public function getArticle($id){
        echo '  Raspuns - '. $id;
    }

}
