<?php

use App\Livewire\Tasks\TaskCreate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return  view('applications');
}); 

Route::get('/powergrid', function() {
    return view('powergrid');
});