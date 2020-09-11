<?php

namespace app\Http\Controllers\Admin;

use Illuminate\Http\Request;
use app\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function show(){

    /*
     // 6. modalitate cu verificare daca exista 'default.template' functia view() intoarce adevarat sau fals, daca e true intoarce return view('default.template')->withTitle('Hello World');
    if (view()->exists('default.template')){
        return view('default.template')->withTitle('Hello World');
     }
    */




    if (view()->exists('default.template')){
        $view = view('default.template', ['title'=>'Hello World'])->render();
        echo $view;
        return;
    }

    // vedem drumul template cu care lucram acum
    /*echo view('default.template', ['title'=>'Hello World'])->getPath();
    return;*/






        /*
        if (view()->exists('default.template')){

                   view()->name('default.template','myview');
                   return view()->of('myview')->withTitle('Hello World');
               }// nu functioneaza
        */

        /*

         if (view()->exists('default.template')){
              $path = config(view.paths);
              return view()->file($path[0].'/default/template.php')->withTitle('Hello World');
          }else{
              echo 'default.template nu exista!';
              //abort(404);
          }// nu merge, da eroare

          */

        //return view('default.template')->withTitle('Hello World'); // 5. alta modalitate de transmite datele in variabila din view ->withTitle('Hello World')

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
