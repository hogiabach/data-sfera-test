<?php

use App\Http\Controllers\Leads_controller;
use Illuminate\Http\Request;
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



Route::get('/leads', function () {
    $leads_controller = new Leads_controller;
    $count = $leads_controller->updateDB();
    if ($count == null) {
        return response("<h4>Change a new AMOCRM_CODE_AUTHORIZATION in .env</h4>");
    }
    return view("leads", [
        "COUNT_INSERT" => $count->COUNT_INSERT,
        "COUNT_UPDATE" => $count->COUNT_UPDATE,
    ]);
});
