<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function Index(){
        echo __METHOD__;
    }

    public function Create(){
        //echo __METHOD__;
        echo route('pages.create');
    }

    /*public function getIndex(){
        echo __METHOD__;
    }

    public function getCreate(){
        echo __METHOD__;
    echo route('pages.create');

    }*/

    public function postIndex(){
        print_r($_POST);
    }

    /*public function getEdit(){
        echo __METHOD__;
    }

    public function getShow(){
        echo __METHOD__;
    }

    public function getDelete(){
        echo __METHOD__;
    }*/
}
