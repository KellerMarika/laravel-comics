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
    return view('home');
})->name("home");

Route::get("/", function () {
    // Devo recuperare la lista dei post.
    // Normalmente li leggeremo dal nostro DB.

    // SOLO temporaneamente creiamo degli array interni o usiamo il config();
    $headerNav = config("DBheaderNav");
    $topBunner = config("DBtopBunner");
    $comics= config("DBcomics");
    $footer = config("DBfooter");
    $bottomBunner = config("DBbottomBunnerSocial");
 




    // Siccome lo scopo della funzione è rispondere al browser,
    // questa DEVE ritornare qualcosa.
    return view("home", [


        "navLinks" =>$headerNav,
        "comics" => $comics,
        "topBunnerLinks" => $topBunner,
        "footerLinks" => $footer,
        "bottomBunnerLinks" =>  $bottomBunner,
    ]);
})->name("home");