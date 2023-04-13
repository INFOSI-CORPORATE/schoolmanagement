<?php

use Illuminate\Support\Facades\Route;

/** Extension  */

use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SchoolyearController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;

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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});




/** All Routes Admin  */

require __DIR__ . '/Admin.php';


