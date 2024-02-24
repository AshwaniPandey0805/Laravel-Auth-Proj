<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Models\User; // Import the User model

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

Route::get('/', function () {
    return view('homeDashbord');
})->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Route::get('/login', function(){
//     return view('login');
// });




Route::get('/login',[AuthManager::class, 'login'])->name('login');
Route::post('/login',[AuthManager::class, 'loginPost'])->name('login.post');

Route::get('/register',[AuthManager::class, 'register'])->name('register');
Route::post('/register',[AuthManager::class, 'registerPost'])->name('register.post');

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::group(['middleware'=>'auth'], function(){
    Route::get('/profile', function(){
        $users = User::all(); // Retrieve all users from the database
        return view('admin_dashboard.admin', ['users' => $users]);
    })->name('registerPage');
});

Route::get('/admin', function(){
    return view('admin_dashboard.admin');
});


// Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');

// require __DIR__.'/auth.php';
