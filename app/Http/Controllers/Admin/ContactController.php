<?php


namespace app\Http\Controllers\Admin;

/*use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;*/


class ContactController extends Controller
{
    /*protected $request;
    public function __construct(Request $request){
        $this->request = $request;
    }*/


    // mai jos, modalitati de afisare a datelor din erray, masiv
    public function show(Request $request){
        //print_r($request->all());
        //print_r = $request->only('name','site');
        print_r = $request->except('name','site');
        print_r($array);

        echo '<h1 style="margin-top: 100px">'.$request->input('name','default').'/h1';
        if ($request->has('name')){
            echo '<h1 style="margin-top: 100px">'.$request->input('name','default').'/h1';
        }
        return view('default.contact',['title'=>'Contacts']);
    }
}
