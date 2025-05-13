<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $extensions = DB::select('select * from extensions');

    return view('main', ['extensions' => $extensions]);
});
