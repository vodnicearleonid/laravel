<?php

namespace app\Http\Controllers\Admin;

use http\Env\Response;
use Illuminate\Http\Request;
use app\Http\Controllers\Controller;

class AboutController extends Controller
{
    //
     public function show(){

         if (view()->exists('default.about')){

             $view = $view('default.about')->withTitle('Hello World')->render();
             /*return (new Response($view))
                                ->header('Content-Type','newType')
                                ->header('Header-One','headerTest')
                                ;*/

/*             return response($view)
                        ->header('Content-Type','newType')
                         ->header('Header-One','headerTest')
                         ;*/

             //return response()->json(['title'=>'Hello World','title_test'=>'Hello World']);
             return response()->view();

             /*$view = view('default.about', ['title'=>'Hello World'])->render();
             echo $view;
             return;*/
         }

     }
}
