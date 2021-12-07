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
    return view('index');
})->name("index");

Route::get('about', function () {
    return view('pages.about');
})->name("about");

Route::get('contact', function () {
    return view('pages.contact');
})->name("contact");

Route::get('articles', function () {
    $dummy_articles = [
        ["id" => 1, "name" => "Some name", "content" => "some content"],
        ["id" => 2, "name" => "Another name", "content" => "other content"],
        ["id" => 3, "name" => "More names", "content" => "more content"],
        ["id" => 4, "name" => "Relatively long name", "content" => "endless content"]
    ];
    return view('pages.articles', data: ["articles" => $dummy_articles]);
})->name("articles");

Route::get('article/{id}', function($id) {
    $dummy_articles = [
        ["id" => 1, "name" => "Some name", "content" => "some content"],
        ["id" => 2, "name" => "Another name", "content" => "other content"],
        ["id" => 3, "name" => "More names", "content" => "more content"],
        ["id" => 4, "name" => "Relatively long name", "content" => "endless content"]
    ];
    return(view('pages.article', data: ["article" => $dummy_articles[$id-1]]));
})->name("article");

Route::get('categories', function () {
    return view('pages.categories', data: [
        "categories" => ["თაიგული" => 1, "გვირგვინი" => 2, "საქორწინო თაიგულები" => 3, "კომპოზიციები კალათაში" => 4]
    ]);
})->name("categories");

Route::get('category/{id}', function($id) {
    $categories = ["თაიგული", "გვირგვინი", "საქორწინო თაიგულები", "კომპოზიციები კალათაში"];
    return view('pages.category', data: ["category_name" => $categories[$id-1]]);
})->name("category");