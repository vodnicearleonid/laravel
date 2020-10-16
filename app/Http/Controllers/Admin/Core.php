<?php

namespace app\Http\Controllers\Admin;

use app\Article;
use app\User;
use Illuminate\Http\Request;
use app\Http\Controllers\Controller;
use DB;

class Core extends Controller
{

    public function __construct(){
        //$this->middleware('mymiddle');
    }

    //lista cu materiale
    public function getArticles(){

        /*$articles = Article::all();
        foreach ($articles as $article){
            echo $article->text.'<br>';
        }
        dump($articles);
        return;*/

        //$articles = Article::where('id','>',8)->orderBy('id')->take(2)->get();

        /*Article::chunk(2, function ($articles){
           //
        });*/

        //$article = Article::find(10);
        //$articles = Article::where('id',10)->first();
        //$articles = Article::find([10,11,7]);
        //$article = Article::findOrFail(100); //404 Not Found

        //insert
        /*$article = new Article();

        $article->name = 'New Article';
        $article->text = 'New Text';
        //$article->img = 'New Img';

        $article->save();
        $articles = Article::all();*/

        //update
        /*$article = Article::find(26);
        $article->text = 'New Name Update :)';
        $article->save();

        echo $article->text;*/

        //adaugare info in baza de date
        /*Article::create(
            [
                'name'=>'Hellow World Article::create()',
                'text'=>'Some Text Article::create()'
            ]
        );*/

        /*$article = Article::firstOrCreate([
            'name'=>'Hellow World Article::create()',
            'text'=>'Some Text Article::create()'
        ]);*/

        /*$article = Article::firstOrNew([
            'name'=>'Hellow World Article::create()test',
            'text'=>'Some Text Article::create()'
        ]);
        $article->save();*/

        //$article = Article::find(20);
        //$article->delete();
        //Article::destroy(12,13,14,15,16,17,18);
        //Article::where('id','>','26')->delete();

        /*$article = Article::find(8);
        $article->delete();*/

        /*$articles = Article::withoutTrashed()->get();

        foreach ($articles as $article){
            if($article->trashed()){
                echo $article->id.' Deleted <br />';
            }
            else{
                echo $article->id.' no Deleted <br />';
            }
        }*/

        //$articles = Article::withoutTrashed()->restore();
        //$articles = Article::onlyTrashed()->restore();

        /*$articles = Article::withoutTrashed()->get();

        foreach ($articles as $article){
            if($article->trashed()){
                echo $article->id.' Deleted <br />';
                $article->restore();
            }
            else{
                echo $article->id.' no Deleted <br />';
            }
        }*/

        //$article = Article::find(9);
        //$article->forceDelete();
        $user = User::find(1);

        //$article = Article::all();
        //echo $article->text;
        dump($user);
        return;

        //$articles = DB::table('gadgets')->get();
        //$articles = DB::table('gadgets')->get();
        //$articles = DB::table('gadgets')->get()->first();
        //$articles = DB::table('gadgets')->value('color');
        //$articles = DB::table('gadgets')->pluck('color');
        //$articles = DB::table('articles')->count();
        //$articles = DB::table('articles')->max('id');
        //$articles = DB::table('gadgets')->select('id','processor','price')->get();
        //$articles = DB::table('gadgets')->distinct()->select('price')->get();
        //$query = DB::table('gadgets')->distinct()->select('price');
        //$users =$query->addSelect('producer AS alisas')->get();
        //$gadgets = DB::table('gadgets')->select('producer')->where('id','<',4)->get();

        /*$gadgets = DB::table('gadgets')->select('processor','producer')
            ->where('id','<',5)
            ->where('producer','like','Ryzen%','or')
            ->get();*/

        /*$gadgets = DB::table('gadgets')->select('processor','producer')
            ->where([
                        ['id','<',5],
                        ['producer','like','Ryzen%','or']
                    ])
            ->get();*/

        /*$gadgets = DB::table('gadgets')->select('processor','producer')
            ->where('id','<',5)
            ->where('producer','like','Socket%','or')
            ->orWhere('id','<','2')
            ->get();*/
        //$gadgets = DB::table('gadgets')->whereBetween('id',[1,3])->get();
        //$gadgets = DB::table('gadgets')->whereNotBetween('id',[1,3])->get();
        //$gadgets = DB::table('gadgets')->whereIn('id',[2,4])->get();
        //$gadgets = DB::table('gadgets')->whereNotIn('id',[2,4])->get();
        //$gadgets = DB::table('gadgets')->take(1)->get();
        //$gadgets = DB::table('gadgets')->take(3)->skip(1)->get();
        //$gadgets = DB::table('gadgets')->take(3)->skip(1)->get();

       /* DB::table('gadgets')->insert(
            ['producer' => 'john@example.com','screen' => 'ecran', 'processor' => 'amd, intel','color' => 'culoare','price' => 'pret',]
        );*/

        /*DB::table('gadgets')->insert([
            ['producer' => 'john@example.com','screen' => 'ecran', 'processor' => 'amd, intel','color' => 'culoare','price' => 'pret',]
        ]);*/

        /*DB::table('gadgets')->insert(
            [
                ['producer' => 'john@example.com','screen' => 'ecran', 'processor' => 'amd, intel','color' => 'culoare','price' => 'pret',],
                ['producer' => 'john@example.com2','screen' => 'ecran2', 'processor' => 'amd2, intel','color' => 'culoare','price' => 'pret',],
                ['producer' => 'john@example.com3','screen' => 'ecran3', 'processor' => 'amd3, intel','color' => 'culoare','price' => 'pret',],
                ['producer' => 'john@example.com4','screen' => 'ecran4', 'processor' => 'amd4, intel','color' => 'culoare','price' => 'pret',],
            ]
        );*/

        //$result = DB::table('gadgets')->insertGetId(['producer' => 'john@example.com','screen' => 'ecran', 'processor' => 'amd, intel','color' => 'culoare','price' => 'pret']);


         //$result = DB::table('gadgets')->where('id', 3)->update(['producer' => 'john@example.com','screen' => 'ecran', 'processor' => 'amd, intel','color' => 'culoare','price' => 'pret',]);
        //$result = DB::table('gadgets')->where('id', 4)->delete();

        /*JOIN 'gadgets' ON car.id = gadgets.id;
            $result = DB::table('car')
                ->join('gadgets', 'car.id', '=', 'gadgets.id')
                ->select();
                ->get();*/

       // dump($result);
    }

    //lista cu articol
   public function getArticle($id){
        echo '  Raspuns - '. $id;
    }

}
/*$query = DB::table('gadgets')->distinct()->select('price');
        $users = $query->addSelect('producer')->get();*/

