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

Route::get('/legal/terms-of-service', function()
{
    return View::make('pages.terms_of_service');
});

Route::get('/managing-your-business/annual-report', function()
{
    return View::make('pages.annual_report');
});

Route::get('/support/contact-us', function()
{
    return View::make('pages.contact_us');
});

Route::get('/support/swyft-filings-guarantee', function()
{
    return View::make('pages.swyft_filings_guarantee');
});

Route::get('/support/why-us', function()
{
    return View::make('pages.why_us');
});

Route::get('/support/our-reviews', function()
{
    return View::make('pages.our_reviews');
});

Route::get('/incorporation/start-an-s-corporation', function()
{
    return View::make('pages.start_an_s_corp');
});

Route::get('/nonprofit/start-a-nonprofit', function()
{
    return View::make('pages.start_a_nonprofit');
});

Route::get('/limited-liability-company/start-an-llc-limited-liability-company', function()
{
    return View::make('pages.start_an_llc');
});

Route::get('/starting-your-business/compare-business-types', function()
{
    return View::make('pages.compare_biz_types');
});

// Route::get('/incorporation/process', function()
// {
//     return View::make('pages.our_incorporation_process');
// });
