<?php


namespace app\Http\Controllers;

use app\Http\Controllers\Controller;

class FirstController extends Controller
{
    public function show($id){
        echo __METHOD__;
        echo $id;
    }
}
