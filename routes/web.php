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


Route::get("/", function () {

    $headerNav = config("DBheaderNav");
    $topBunner = config("DBtopBunner");
    $comics= config("DBcomics");
    $footer = config("DBfooter");
    $bottomBunner = config("DBbottomBunnerSocial");
 
    return view("home", [


        "navLinks" =>$headerNav,
        "comics" => $comics,
        "topBunnerLinks" => $topBunner,
        "footerLinks" => $footer,
        "bottomBunnerLinks" =>  $bottomBunner,
    ]);
})->name("home");

Route::get("/comicOverview", function () {

    $headerNav = config("DBheaderNav");
    $topBunner = config("DBtopBunner");
    $comics= config("DBcomics");
    $footer = config("DBfooter");
    $bottomBunner = config("DBbottomBunnerSocial");
    $comicIndexPassedOnClick = 0;
 
    return view("comicOverview", [


        "navLinks" =>$headerNav,
        "comics" => $comics,
        "topBunnerLinks" => $topBunner,
        "footerLinks" => $footer,
        "bottomBunnerLinks" =>  $bottomBunner,
        "comicIndex"=>$comicIndexPassedOnClick,
    ]);
})->name("comicOverview");