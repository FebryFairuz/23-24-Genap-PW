<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Pertemuan5;
use App\Http\Controllers\Pertemuan6;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::controller(BooksController::class)->group(function () {
    Route::get('/catalog-books', 'index');
    Route::get('/catalog-books/create', 'create');
    Route::post('/catalog-books/create', 'store');
    Route::get('/catalog-books/detail', 'show');
});

Route::controller(CategoriesController::class)->group(function () {
    Route::get('/categories-books', 'index');
    Route::get('/categories-books/create', 'create');
    Route::post('/categories-books/create', 'store');
    Route::get('/categories-books/detail', 'show');
    Route::get('/categories-books/update/{categories}', 'edit');
    Route::post('/categories-books/update/{categories}', 'update');
    Route::get('/categories-books/delete/{categories}', 'destroy');
});
Route::controller(UsersController::class)->group(function () {
    Route::get('/users-books', 'index');
    Route::get('/users-books/create', 'create');
    Route::post('/users-books/create', 'store');
    Route::get('/users-books/detail', 'show');
    Route::get('/users-books/delete/{users}', 'destroy');
    Route::get('/users-books/update/{users}', 'edit');
    Route::post('/users-books/update/{users}', 'update');
});




// Route::get('/home', function(){
//     return view('pertemuan-7.admin_temp.Home');
// });
Route::get('/profile', function(){
    return view('pertemuan-7.admin_temp.Profile');
});


// Route::get('/', [Pertemuan6::class, 'index']);
// Route::get('/sign-in', [Pertemuan6::class, 'index']);
Route::get('/sign-in/pa', [Pertemuan6::class, 'signInPA']);
Route::get('/sign-in/pb', [Pertemuan6::class, 'signInPB']);
Route::post('/sign-in', [Pertemuan6::class, 'postSignIn']);

Route::get('/pertemuan-5', [Pertemuan5::class, 'index']);
Route::get('/pertemuan-5/latihan-pb', [Pertemuan5::class, 'LatihanPB']);
Route::get('/pertemuan-5/latihan-pa', [Pertemuan5::class, 'LatihanPA']);

// Route::get('/ka-pertemuan-4', function(){
//     return "Hello";
// });

// Route::get('/ka-pertemuan-4', [KAPertemuan4::class, 'p4' ]);

// Route::get('/test',function(){
//     //Variable
//     $name = "Febry";
//     $weight = 80.8;
//     $height = 1;

//     //Object : key => value
//     $mahasiswa = array("id" => 1, "name" => $name, "weight"=>$weight, "height"=>$height);
//     $mahasiswa2 = array("id" => 1, "name" => "Isnan", "weight"=>88.9, "height"=>170);
//     //php => variable_name['key_name']

//     //Array objcet
//     $dataMahasiswa = array(); //initialisasi variable array multi
//     $dataMahasiswa[] = $mahasiswa; //index 0
//     $dataMahasiswa[] = $mahasiswa2; //index 1

//     //syntax  untuk fetch data array
//     // echo '<pre>';
//     // var_dump($dataMahasiswa);
//     // echo '</pre>';

//     return "Name: " . $mahasiswa['name'];
// });

//                                //Controller Name -> function name
// Route::get('/pertemuan-3', [Pertemuan3::class, 'index'] );
// Route::get('/pertemuan-4', [Pertemuan3::class, 'p3'] );

// //Nicholas
// Route::get('/soal-7',[Pertemuan3::class, 'soal7']);
// Route::post('/soal-7',[Pertemuan3::class, 'saveSoal7']);

// Fikri
// Route::get('/soal-7',function(){
//     return "hai";
// });







//TI-22-PB
//Receiving
// Route::get('/', function(){
//     return "Hi";
// });

// Route::get('/hello', function(){
//     return "Hello";
// });

//route dgn controller
                            //classname , function name
// Route::get('/pertemuan-1',[Pertemuan1Controller::class, 'index']);
// Route::get('/pertemuan-2',[Pertemuan1Controller::class, 'test']);

//222310050 - Fajar
//Route::get('/latihan-6',[Pertemuan1Controller::class, 'soal6']);















// Route::get('/', [HomeController::class,'index']);
// Route::get('/login', [LoginController::class,'index']);
// Route::post('/login', ['as'=>'login', 'uses'=>'LoginController@submit']);

// Route::get('/home', [HomeController::class,'index']);

// Route::controller(ProductsController::class)->group(function () {
//     Route::get('/master-data/products', 'index')->name('m_products');
//     Route::post('/master-data/products', 'store');
//     Route::get('/master-data/products/{id}', 'show')->name('m_products_detail');
//     Route::get('/master-data/products/edit/{id}', 'edit')->name('m_products_edit');
//     Route::get('/master-data/products/remove/{id}', 'destroy')->name('m_products_remove');
// });
// Route::get('/master-data/users', function(){
//     return view('modules.master-data.users.user');
// });
