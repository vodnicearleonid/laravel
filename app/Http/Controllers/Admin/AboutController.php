<?php

namespace app\Http\Controllers\Admin;

use Illuminate\Http\Request;
use app\Http\Controllers\Controller;

class AboutController extends Controller
{
    //
     public function show(){

         if (view()->exists('default.about')){
             $view = view('default.about', ['title'=>'Hello World'])->render();
             echo $view;
             return;
         }

     }
}
