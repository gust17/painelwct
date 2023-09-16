<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('saque', function () {

    //$usuarios = \App\Models\UserSistema::whereHas('extratos')->get();


    $usuarios = \App\Models\UserSistema::whereHas('extratos')->get();
    return view('corrige', compact('usuarios'));

});

Route::get('userfatura',function (){
    $users = \App\Models\UserSistema::whereHas('faturas', function ($query) {
        $query->where('id_plano', 1)
            ->where('status', 2);
    }, '>', 1)->get()->toArray();
    dd($users);
});
