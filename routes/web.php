<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
use App\Mail;
// use App\Http\Controllers;
use App\Http\Controllers;
use App\Models;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/email', function (){
    return new NewUserWelcomeMail();
});

Route::post('follow/{user}', [FollowsController::class, 'store']);
//1:44
Route::get('/news', [PostsController::class, 'index']);

// Route::get('/welcome', [HomesController::class, 'index']);
Route::get('/p/create', [PostsController::class, 'create']);
Route::post('/p', [PostsController::class, 'store']);
Route::get('/p/{post}', [PostsController::class, 'show']);
// Route::get('/p/{post}', 'PostsController@show');
    
Route::get('/profile/{user}', [ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [ProfilesController::class, 'edit']);
Route::patch('/profile/{user}', [ProfilesController::class, 'update']);
