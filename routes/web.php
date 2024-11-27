<?php
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

// General Routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('web')->group(function () {
// Livewire Component Routes
Route::get('Admin/index', Livewire::component('admin.admin-index', Dotgix\ChatSupport\Livewire\Admin\Index::class))->name('Admin.index');

Route::get('Admin/chat/{query}', Livewire::component('admin.admin-chat', Dotgix\ChatSupport\Livewire\Admin\Chat::class))
    ->name('Admin.chat');

Route::get('Consultant/index', Livewire::component('consultant.consultant-index', Dotgix\ChatSupport\Livewire\Consultant\Index::class))
    ->name('Consultant.index');

Route::get('Consultant/chat/{query}', Livewire::component('consultant.consultant-chat', Dotgix\ChatSupport\Livewire\Consultant\Chat::class))
    ->name('Consultant.chat');
});
// Test 
Route::get('Check/', function () {
    dd(phpinfo());
})->name('Consultant.chat');
