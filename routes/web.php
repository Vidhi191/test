<?php



/**Route::get('/', function () {
    return view('welcome');
});**/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::resource('student', StudentController::class);









