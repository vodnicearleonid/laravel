<?php

namespace app\Http\Controllers\Admin;

use Illuminate\Http\Request;
use app\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function show(){

        return view('default.template')->withTitle('Hello World'); // 5. alta modalitate de transmite datele in variabila din view ->withTitle('Hello World')

        /*//4. alta modalitate de a transmite datele in view
        $view_variable = view('default.template');
            $view_variable->with('title0','Hello World_0');
            $view_variable->with('title1','Hello World_1');
            $view_variable->with('title2','Hello World_2');
        return $view_variable;*/


        //return view('default.template')->with('title','Hello World');// 3. alta modalitate de a transmite datele in view() prin metoda ->with('variabila','valoarea')

        /*$data = array('title'=>'Hei Lume', 'title2'=>'Hei Lume2');
        return view('default.template', $data); // 2. alta metoda nult mai comoda, dar cu acelasi rezultat*/

        // 1. return view('default.template', ['title'=>'Hei Lume']);//key=>value una din metode sa transmitem datele in in variabila sub forma de masiv
    }
}
