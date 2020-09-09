<?php

namespace app\Http\Controllers\Admin;

use Illuminate\Http\Request;
use app\Http\Controllers\Controller;

class Core extends Controller
{
    public function __construct(){
        //$this->middleware('mymiddle');
    }

    //lista cu materiale
    public function getArticles(){

    }

    //lista cu articol
    public function getArticle($id){
        echo '  Raspuns - '. $id;
    }

}
