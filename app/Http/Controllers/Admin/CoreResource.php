<?php

namespace app\Http\Controllers\Admin;

use Illuminate\Http\Request;
use app\Http\Controllers\Controller;

class CoreResource extends Controller
{

    public function index(){
        echo __METHOD__;
    }

    public function add(){
        echo __METHOD__;
    }

    public function create(){
        echo __METHOD__;
    }

    public function store(Request $request){
        //echo __METHOD__;
        print_r($_POST);
    }

    public function show($id){
        echo $id;
    }

    public function edit($id){
        echo __METHOD__;
    }

    public function update(Request $request, $id){
        //echo __METHOD__;
        print_r($_POST);
    }

    public function destroy($id){
        echo __METHOD__;
    }


}
