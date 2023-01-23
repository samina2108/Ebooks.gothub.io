<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\CheckoutController;
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
Route::get('/apply', function () {
    return view('apply_compe');
});
// Route::get('adminfetch',[AdminController::class,'adminfetch']);
// Route::get('/delete5/{id?}', [AdminController::class,'Admindeletefetch']);
// Route::put('update-book/{id}', [AdminController::class, 'update']);
Route::get('/index', function () {
    return view('index');
});

// Comic page
Route::get('comics',[AuthController::class,'fetchcomic']);
Route::get('quizbook',[AuthController::class,'fetchQuiz']);
Route::get('novel',[AuthController::class,'fetchNovel']);
Route::get('general',[AuthController::class,'fetchGeneral']);
Route::get('/publish', function () {
    return view('auth.publishbook');
});

// User login
    Route::get('login',[AuthController::class,'index'])->name('login');
    Route::post('login',[AuthController::class,'login'])->name('login');

    Route::get('register',[AuthController::class,'register_view'])->name('register');
    Route::post('register',[AuthController::class,'register'])->name('register')
;




    // Route::get('home',[AuthController::class,'home'])->name('home');
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
    Route::get('logout1',[AdminController::class,'logout1'])->name('logout1');

// dashboard rout
Route::get('dashboard',[AuthController::class,'dashboardfunc']);
Route::get('user',[AuthController::class,'dash2']);
// Productadd
Route::get('publishbook',[AuthController::class,'publishfunc']);
Route::post('insertbook',[AuthController::class,'insertbook']);

// fetch user product
Route::get('fetch',[AuthController::class,'fetchproduct']);


// dashboard rout 2

Route::get('userdashboard',[AuthController::class,'userdashboard']);

// user delet route
Route::get('/delete3/{id?}', [AuthController::class,'userdelete']);

// Home Funtion Route
    

Route::get('home', [Homecontroller::class,'Homefunc']);


// Category route
Route::get('category', [AdminController::class,'categoryfetch']);

// Adminregister route
Route::get('Adminregister', [AdminController::class,'adminregisterfunc']);
Route::post('Adminregister', [logincontroller::class,'registration']);

// Admin login route
Route::get('Adminlogin', [logincontroller::class,'Adminlogin']);
Route::post('Adminlogin1', [logincontroller::class,'postLogin']);



// Admindashoboard route

Route::get('dashboardadmin',[homecontroller::class,'Admindashboard']);

// RouteADD product
Route::get('productadd',[AdminController::class,'Addproduct']);
Route::post('Addbook',[AdminController::class,'Addbook']);
// fetch product dashboard route
Route::get('viewproduct',[AdminController::class,'fetchuserdata']);

// Admin delet data route
Route::get('/delete1/{id?}', [AdminController::class,'Admindelete']);


// Adminfetch product route
Route::get('adminfetch',[AdminController::class,'adminfetch']);
Route::get('/delete5/{id?}', [AdminController::class,'Admindeletefetch']);


// Admin update route
// Route::get('update',[UpdateController::class,'updatefunc']);

// Admin edit route
Route::get('/edit1/{id?}',[AdminController::class,'edit']);

Route::get('/delete2/{id?}', [AdminController::class,'Adminuserdeletefetch']);
// Route::post('update', [AdminController::class,'update']);
Route::put('update-book/{id}', [AdminController::class, 'update']);


// Competition route
Route::get('competition', [CompetitionController::class,'Competition']);
Route::post('competition_post', [CompetitionController::class,'competitionInsert']);
Route::get('Storyfetch', [CompetitionController::class,'fetch_story']);
Route::get('/delete6/{id?}', [CompetitionController::class,'story_delete']);
Route::get('/edit2/{id?}',[CompetitionController::class,'edit2']);
Route::put('story-update/{id}', [CompetitionController::class,'story_update']);
// contact us view?
Route::get('contact', [Homecontroller::class,'contactview']);


Route::post('contact1', [ContactController::class,'contactinsert']);
// Middlleware==================================================
Route::Group(["middleware"=>'adminAuth'],function(){

    Route::get('dashboardadmin',[homecontroller::class,'Admindashboard']);
    Route::get('productadd',[AdminController::class,'Addproduct']);
    Route::get('viewproduct',[AdminController::class,'fetchuserdata']);
    Route::get('adminfetch',[AdminController::class,'adminfetch']);
    Route::get('/delete1/{id?}', [AdminController::class,'Admindeletefetch']);
    Route::get('/edit1/{id?}',[AdminController::class,'edit']);

Route::get('/delete2/{id?}', [AdminController::class,'Adminuserdeletefetch']);

Route::put('update-book/{id}', [AdminController::class, 'update']);
Route::get('productadd',[AdminController::class,'Addproduct']);
Route::post('Addbook',[AdminController::class,'Addbook']);
Route::get('/delete1/{id?}', [AdminController::class,'Admindelete']);
Route::get('viewproduct',[AdminController::class,'fetchuserdata']);

// Admin delet data route
Route::get('/delete1/{id?}', [AdminController::class,'Admindelete']);

});
// SEARCH ROUTE
Route::get('search', [UpdateController::class,'search']);
// SEARCH ROUTE

// winner page
// Route::get('winner', [HomeController::class,'winnerview']);

// Route::get('winner',[AuthController::class,'fetchWinner']);
// Route::get('winner1',[AuthController::class,'fetchWinnerstory']);
Route::get('winner',[AuthController::class,'homepage']);
// Checkout route


Route::get('checkout',[HomeController::class,'checkoutview']);
Route::post('checkout1',[CheckoutController::class,'checkoutInsert']);

