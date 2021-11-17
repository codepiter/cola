<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

use App\Models\Assignment;
//use App\Http\Controllers\UserProfileController;


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
	
	$cola1 = Assignment::where('queue_id', 1)->where('status', 0)->get();
	$cola2 = Assignment::where('queue_id', 2)->where('status', 0)->get();
	
	$atendidos = Assignment::where('status', 1)->get();
	
	
    return view('welcome', compact('cola1','cola2','atendidos'));
});

//Habilita edit y register 
/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';*/


Route::resource('customers', CustomerController::class);


Route::post ('assignments/updateStatus', [App\Http\Controllers\AssignmentController::class, 'updateStatus'])->name('assignments.updateStatus');

Route::post('/assignments/destroy', [App\Http\Controllers\AssignmentController::class, 'destroy'])->name('assignments.destroy');







