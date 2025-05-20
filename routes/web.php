<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('index');
 
 })->name('index');



 Route::get('/index', function () {
    return view('index');
 
 })->name('index');


 
Route::get('/shop', function () {
    return view('shop');
 
 })->name('shop');


 Route::get('/about', function () {
    return view('about');
 
 })->name('about');




 Route::get('/contact', function () {
    return view('contact');
 
 })->name('contact');


 Route::get('/login', function () {
    return view('login');
 
 })->name('login');