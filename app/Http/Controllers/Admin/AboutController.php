<?php

namespace app\Http\Controllers\Admin;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use app\Http\Controllers\Controller;

class AboutController extends Controller
{
    //
     public function show(){

         if (view()->exists('default.about')){


             $view = view('default.about', ['title'=>'Hello World']);
             echo $view;
             return;

             //return response()->json(['title'=>'Hello World','title_test'=>'Hello World']);
             //return response()->view('default.about', ['title'=>'Hello World']);


                 /*return response('Hello World', 200)
                     ->header('Content-Type', 'text/plain');*/

         }

     }
}
