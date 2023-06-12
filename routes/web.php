<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManagerController;
use App\Http\Controllers\DashboarController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\custumerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Facade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
// Route::get('/testview', function () {

//     if (Auth::check()) {
//         $user = Auth::user();
//         // إذا تم تسجيل الدخول، قم بتوجيه المستخدم إلى الصفحة المطلوبة وإرسال رسالة ترحيبية باستخدام الدالة with()
//         return view('testview');
//     } else {

//         // إذا لم يتم تسجيل الدخول، قم بتوجيه المستخدم إلى صفحة تسجيل الدخول
//         return redirect('/testview')->with('message', "filler ");
//     }
// })->name('testview');

Route::redirect('/', '/login');

Route::get('/index', function () {

    return view('index')->with('message', "مرحبًا بك، " );
})->name('index');
Route::post('/index', [AuthManagerController::class, 'datacustumerPost'])->name('datacustumer.post');

Route::get('/login', [AuthManagerController::class, 'login'])->name('login');
Route::post('/login', [AuthManagerController::class, 'loginPost'])->name('login.post');
Route::get('/registertion', [AuthManagerController::class, 'registertion'])->name('registertion');
Route::post('/registertion', [AuthManagerController::class, 'registertionPost'])->name('registertion.post');




Route::get('/admin/dashboard', function () {
    return view('AdminDashBoard.indexDashborde');
})->name('AdminDashBoard.indexDashborde');

Route::get('/admin/dashboard/users', function () {
    return view('AdminDashBoard.users');
})->name('AdminDashBoard.users');


Route::get('/dashboard', [DashboarController::class, 'indexDashborde'])->name('dashboard.indexDashborde');
Route::get('/dashboard/users', [DashboarController::class, 'users'])->name('dashboard.users');
Route::get('/dashboard/customers', [DashboarController::class, 'customers'])->name('dashboard.customers');

// Route::get('/dashboard/delete', [DashboarController::class, 'delete'])->name('customer.destroy');



Route::get('/stocks/index', function () {
    return view('stocks.index');
})->name('stocks.index');

Route::get('/stocks/layout', function () {
    return view('stocks.layout');
})->name('stocks.layout');

Route::get('/stocks/create', function () {
    return view('stocks.create');
})->name('stocks.create');

//Edit data
Route::get('/stocks/show', [custumerController::class, 'show'])->name('stocks.Customers');
// destroy
Route::get('/click_delete/{id}', [custumerController::class, 'destroy'])->name('custumer.destroy');
// destroy user
Route::get('/click_delete_user/{id}', [UserController::class, 'destroyUser'])->name('user.destroy');



// Route::get('/', function () {
//     return redirect('/stocks');
// });

Route::resource('stocks', StockController::class);
