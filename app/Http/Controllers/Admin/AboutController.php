<?php

namespace app\Http\Controllers\Admin;

use app\Article;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use app\Http\Controllers\Controller;
use DB;

class AboutController extends Controller
{
    //
     public function show(){

         if (view()->exists('default.about')){

             $articles = DB::select("SELECT * FROM `articles` WHERE id = ?",[6]);
             dump($articles);//dd();

             $query = Article::query()
                 ->select(['id', 'name', 'text'])
                 ->orderBy('created_at', 'DESC');

//             if (3 > 2) {
//                 $query->where('id', '<=', 9);
//             } else {
//                 $query->where('id', '=', 7);
//             }

             $articles = $query->get();

//             foreach ($articles AS $article) {
//                dump($article->id, $article->name, $article->text);
//             }

             $view = view('default.about', ['title'=>'Hello World', 'items' => $articles]);
             echo $view;
             return;



             //return response()->json(['title'=>'Hello World','title_test'=>'Hello World']);
             //return response()->view('default.about', ['title'=>'Hello World']);


                 /*return response('Hello World', 200)
                     ->header('Content-Type', 'text/plain');*/


         }

     }
}
