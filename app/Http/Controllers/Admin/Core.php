<?php

namespace app\Http\Controllers\Admin;

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

        //$gadgets = DB::table('gadgets')->insert(['producer' => 'producer test','screen' => 'screen test']);

        DB::table('gadgets')->insert(
            [
                ['color' => 'color test1','price' => 'price test1'],
                ['color' => 'color test2','price' => 'price test2']
            ]
        );

        //dump($gadgets);
    }

    //lista cu articol
    public function getArticle($id){
        echo '  Raspuns - '. $id;
    }

}
/*$query = DB::table('gadgets')->distinct()->select('price');
        $users = $query->addSelect('producer')->get();*/



