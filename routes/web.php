<?php

use App\Http\Controllers\ClientController;
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
    return view('welcome');
});

// Route::get('clients/report', [ClientController::class, 'report']);
Route::resource('clients', ClientController::class);

Route::resource('companies', CompanyController::class);
// show   GET      /companies/{company}

// Route::get('clients', [ClientController::class, 'index']);
// Route::get('clients/create', [ClientController::class, 'create']);
// Route::post('clients', [ClientController::class, 'store']);
// Route::get('clients/{client}', [ClientController::class, 'show']);
// Route::get('clients/{client}/edit', [ClientController::class, 'edit']);
// Route::put('clients/{client}', [ClientController::class, 'update']);
// Route::delete('clients/{client}', [ClientController::class, 'destroy']);



// Route::get('clients', function () {
//     // return Client::all();
//     return view('clients.index', [
//         'clients' => Client::all()
//     ]);
// })->name('clients.index');

// Route::get('clients/create', function () {
//     return view('clients.create');
// })->name('clients.create');

// Route::post('clients', function (Request $request) {
//     return redirect('clients');
// })->name('clients.store');

// Route::get('clients/{client}', function (Client $client) {
//     return view('clients.show', ['client' => $client]);
// })->name('clients.show');

// Route::get('clients/{client}/edit', function (Client $client) {
//     return view('clients.edit', ['client' => $client]);
// })->name('clients.edit');

// Route::put('clients/{client}', function (Request $request, Client $client) {
//     return redirect('clients');
// })->name('clients.update');

// Route::delete('clients/{client}', function (Client $client) {
//     return redirect('clients');
// })->name('clients.destroy');

// GET | PUSH | PUT | DELETE
// CRUD -> Create, Read, Update e Delete

// index    GET     /clients
// store    POST    /clients
// create   GET     /clients/create
// show     GET     /clients/{client}
// edit     GET     /clients/{client}/edit
// update   PUT     /clients/{client}
// destroy  DELETE  /clients/{client}