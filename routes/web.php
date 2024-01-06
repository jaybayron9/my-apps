<?php

use App\Livewire\Table;
use App\Livewire\Tasks\TaskCreate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return  view('applications');
}); 

Route::get('/powergrid', function() {
    return view('powergrid');
});

Route::get('/livewire', Table::class);