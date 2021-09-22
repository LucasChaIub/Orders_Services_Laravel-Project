<?php

use App\Models\Client;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

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
    // return view('welcome');
    return 'Hello World';
});

Route::get('clients', function () {
    // return Client::all();
    return view('clients.index', [
        'clients' => Client::all()
    ]);
})->name('clients.index');

Route::get('clients/create', function () {
    return view('clients.create');
})->name('clients.create');

Route::post('clients', function (Request $request) {
    return redirect('cleints');
})->name('clients.store');

Route::get('clients/{client}', function (Client $client) {
    return view('clients.show', ['client' => $client]);
})->name('clients.show');

Route::get('clients/{client}/edit', function (Client $client) {
    return view('clients.edit', ['client' => $client]);
})->name('clients.edit');

Route::put('clients/{client}', function (Request $request, Client $client) {
    return redirect('clientes');
})->name('clients.update');

Route::delete('clients/{client}', function (Client $client) {
    return redirect('clientes');
})->name('clients.destroy');
