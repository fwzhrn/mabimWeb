<?php

use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $members = \App\Models\Member::orderBy('urutan')->get();

    return view('home', compact('members'));
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('members', MemberController::class)
        ->except(['show', 'create', 'edit']);
});