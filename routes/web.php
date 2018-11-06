<?php

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

Route::get('/', function()
{
    return View::make('pages.index');
});

Route::get('/dba/get-a-dba-doing-business-as', function()
{
    return View::make('pages.dba');
});

Route::get('/incorporation/start-a-c-corporation', function()
{
    return View::make('pages.c_corp');
});

Route::get('/incorporation/free-business-name-search', function()
{
    return View::make('pages.free_name_search');
});

Route::get('/incorporation/free-incorporation-guide', function()
{
    return View::make('pages.free_incorporation_guide');
});

Route::get('/incorporation/c-corp-faq', function()
{
    return View::make('pages.c_corp_faq');
});
