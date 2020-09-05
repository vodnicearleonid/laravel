<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page', function () {
    return view('page');
});

Route::post('/comments', function () {
    echo '<pre>';
    print_r($_POST);
    echo '<pre>';
});

/*Route::match(['get', 'post'],'/comments', function () {
    print_r($_POST);
});*/

/*Route::any('/comments', function () {
    print_r($_POST);
});*/


/*Route::get('/test', function () {
    //echo 'test';
    echo '<pre>';
    print_r(config());
    // echo config('app.locale');
    // echo Config::get('app.locale');
    echo '</pre>';
});*/

/*Route::get('/test/{id}/{cat}', function ($id,$cat) {

    echo '<pre>';
        echo $id. '|' .$cat;
    echo '</pre>';
});*/

// '/test/{id?}' Semnul intrebarii indica faptul ca al doilea parametru nu este obligatoriu
// function ($id = null), function ($id = 50) al doilea parametru in functie indica valoarea dofault,
// daca nu se tansmite nimic, automat se va pune valoarea din al doilea parametru din functie
/*Route::get('/test/{id?}', function ($id = null) {

    echo '<pre>';
    echo $id;
    echo '</pre>';
});*/


// })->where(array('id','[0-9]+')); transmitem tipul de date care obilatoriu trebuie sa fie transmise prin router
//in cazul de mai joi numai numeric dupa test/123 de exemplu
/*Route::get('/test/{id}', function ($id) {

    echo '<pre>';
    echo $id;
    echo '</pre>';
})->where(array('id','[0-9]+'));*/

/*Route::get('/test/{id}', function ($id) {
    echo $id;
})->where(['id'=>'[0-9]+']);*/

Route::get('/test/{cat}/{id}', function ($id){
    echo $id;
})/*->where(['id'=>'[0-9]+','cat'=>'[A-Za-z]+'])*/;


