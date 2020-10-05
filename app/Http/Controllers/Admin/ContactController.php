<?php


namespace app\Http\Controllers\Admin;

use Illuminate\Http\Request;
use app\Http\Controllers\Controller;


class ContactController extends Controller
{
    /*protected $request;
    public function __construct(Request $request){
        $this->request = $request;
    }*/


    // mai jos, modalitati de afisare a datelor din array
    public function show(Request $request, $id=FALSE){
        //print_r($request->all());
        //print_r = $request->only('name','site');
        //print_r = $request->except('name','site');
        //print_r($array);

        /*echo '<h1 style="margin-top: 100px">'.$request->input('name','default').'/h1';
        if ($request->has('name')){
            echo '<h1 style="margin-top: 100px">'.$request->input('name','default').'/h1';
        }*/
        //echo '<h1 style="margin-top: 100px">'.$request->name.'/h1';
        //echo '<h1 style="margin-top: 100px">'.$request->path().'/h1';

        /*if ($request->is('contact/*')){
            echo '<h1 style="margin-top: 100px">'.$request->path().'/h1';
        }*/

        //echo '<h1 style="margin-top: 100px">'.$request->url().'/h1';
        //echo '<h1 style="margin-top: 100px">'.$request->fullUrl().'/h1';
        //echo '<h1 style="margin-top: 100px">'.$request->method().'/h1';
        //echo '<h1 style="margin-top: 100px">'.$request->query('option).'/h1';
        //print_r($request->header());
        //print_r($request->server());
        //print_r($request->segments());
        //print_r($request->segments());



        if ($request->isMethod('post')){
            //verificari
            //scrim datele in baza de date
            //redirect
        $request->flash();//salveaza in sessie toate datele din interogare
        //$request->flashOnly(); // doar unele dare salveaza in sessie
        //$request->flashExcept(); // specificam care date sa nu fie scrise in seeie

            //return redirect()->route('contact');
            return redirect()->route('contact')->withInput();

            echo '<h1 style="margin-top: 100px">'.$request->method().'/h1';
        }




        return view('default.contact',['title'=>'Contacts']);
    }
}
