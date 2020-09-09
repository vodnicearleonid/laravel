<?php

namespace app\Http\Controllers\Admin;

use Illuminate\Http\Request;
use app\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function show(){
        return view('welcome');
    }
}
