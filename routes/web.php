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

/*Route::get('/', function () {
    return view('welcome');
});*/

// link catre o pagina '/', ['as'=>'home'function () {return view('welcome');}]
Route::get('/', ['as'=>'home',function () {
    return view('welcome');
}]);


// return redirect()->route('article',array('id'=>25)); domen/article/20
Route::get('/article/{id}', ['as'=>'article',function ($id) {
    echo $id;
}]);

Route::group(['prefix'=>'admin/{id}'], function (){

    Route::get('page/aplicatii/{var}', function ($id) {
        $route = Route::current();
        //echo $route->getName();
        //echo $route->getParameter('var', 24);
        print_r($route->parameters());
    })->name('name_route_aplicatii');


    Route::get('page/contacts', function () {
        return redirect()->route('article',array('id'=>25));
        // accesez in browser http://127.0.0.1:8000/admin/page/contacts
        /*Route::get('page/contacts', function () {
        echo route('home');*/
    });


    Route::get('page/create', function () {
        echo 'page/create';
    });

    Route::get('page/edit', function () {
        echo 'page/edit';
    });

});

Route::get('/page', function () {
    return view('page');
});

Route::post('/comments', function () {
    echo '<pre>';
    print_r($_POST);
    echo '<pre>';
});

Route::get('user/{id}', function ($id) {
    // Only executed if {id} is numeric...
    echo $id;
});

//Route::get('user', function () {
//    // Only executed if {id} is numeric...
//    echo rand(1, 1111);
//});

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

/*Route::get('/test/{cat}/{id}', function ($id){
    echo $id;
})/*->where(['id'=>'[0-9]+','cat'=>'[A-Za-z]+']);*/

Route::post('/test', function () {
    print_r($_POST);
});


// ['prefix'=>'admin'], ['prefix'=>'admin/id'] prefixul pentru uri pentru toate paginile din grupul admin
// ['prefix'=>'admin/id'] parametru la prefix
/*Route::group(['prefix'=>'admin'], function (){

    Route::get('page/create', function () {
        echo 'page/create';
    });

    Route::get('page/edit', function () {
        echo 'page/edit';
    });

    Route::get('page/contacts', function () {
        echo 'page/contacts';
    });*/


