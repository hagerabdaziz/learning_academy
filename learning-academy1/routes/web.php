<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homepagecontroller;
use App\Http\Controllers\coursepagecontroller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\trainercontroller;
use App\Http\Controllers\coursecontroller;



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

Route::get('/','App\Http\Controllers\front\homepagecontroller@index')->name('front.pagehome');
Route::get('/cat/{id}','App\Http\Controllers\front\coursepagecontroller@cat')->name('front.course');
Route::get('/cat/{id}/course/{cid}','App\Http\Controllers\front\coursepagecontroller@show')->name('front.show');
Route::get('/contact','App\Http\Controllers\contactcontroller@index')->name('front.index');
Route::POST('/newsletter','App\Http\Controllers\front\messagecontroller@newsletter')->name('front.newsletter');
Route::post('/message/contact','App\Http\Controllers\front\messagecontroller@contact')->name('front.message');
Route::post('/message/enroll','App\Http\Controllers\front\messagecontroller@enroll')->name('front.enroll');



//admin

Route::get('/dashboard/login','App\Http\Controllers\admin\authcontroller@login')->name('admin.login');
Route::post('/dashboard/handlelogin','App\Http\Controllers\admin\authcontroller@handlelogin')->name('admin.handlelogin');


Route::middleware('adminauth:admin')->group(function(){
    Route::get('/dashboard','App\Http\Controllers\admin\homecontroller@index')->name('admin.home');
    Route::get('/dashboard/logout','App\Http\Controllers\admin\authcontroller@logout')->name('admin.logout');
    Route::get('/dashboard/cats','App\Http\Controllers\admin\catcontroller@index')->name('admin.index.cat');
    Route::get('/dashboard/cats/create','App\Http\Controllers\admin\catcontroller@create')->name('admin.create');
    Route::post('/dashboard/cats/store','App\Http\Controllers\admin\catcontroller@store')->name('admin.store');
    Route::get('/dashboard/cats/edit/{id}','App\Http\Controllers\admin\catcontroller@edit')->name('admin.edit');
    Route::post('/dashboard/cats/update/{id}','App\Http\Controllers\admin\catcontroller@update')->name('admin.update');
    Route::get('/dashboard/cats/delete/{id}','App\Http\Controllers\admin\catcontroller@delete')->name('admin.delete');


    Route::get('/dashboard/trainers','App\Http\Controllers\admin\trainercontroller@index')->name('admin.index.trainer');
    Route::get('/dashboard/trainers/create','App\Http\Controllers\admin\trainercontroller@create')->name('admin.trainer.create');
    Route::post('/dashboard/trainers/store','App\Http\Controllers\admin\trainercontroller@store')->name('admin.trainer.store');
    Route::get('/dashboard/trainers/edit/{id}','App\Http\Controllers\admin\trainercontroller@edit')->name('admin.trainer.edit');
    Route::POST('/dashboard/trainers/update','App\Http\Controllers\admin\trainercontroller@update')->name('admin.trainer.update');
    Route::get('/dashboard/trainers/delete','App\Http\Controllers\admin\trainercontroller@delete')->name('admin.trainer.delete');

    Route::get('/dashboard/courses','App\Http\Controllers\admin\coursecontroller@index')->name('admin.index.course');
    Route::get('/dashboard/courses/create','App\Http\Controllers\admin\coursecontroller@create')->name('admin.course.create');
    Route::post('/dashboard/courses/store','App\Http\Controllers\admin\coursecontroller@store')->name('admin.course.store');



 //  Route::get(
       // '/dashboard/courses/edit/{id}',
       // [App\Http\Controllers\admin\coursecontroller::class, 'edit']
    //)->name('admin.course.edit');
  /*  Route::post(
        '/dashboard/courses/update/{id}',
        [App\Http\Controllers\admin\coursecontroller::class, 'update']
        )->name('admin.course.update');*/

        //Route::match(['get', 'post'], '/dashboard/courses/edit/{id}',[App\Http\Controllers\admin\coursecontroller::class,'edit'])->name('admin.course.edit');
            //
       
            //Route::get('/dashboard/courses/edit/{id}','App\Http\Controllers\admin\coursecontroller@edit($id)')->name('admin.course.edit');
    //Route::POST('/dashboard/courses/update/{id}','App\Http\Controllers\admin\coursecontroller@update($id)')->name('admin.course.update');
    Route::get('/dashboard/courses/delete/{id}','App\Http\Controllers\admin\coursecontroller@delete')->name('admin.course.delete');




});
 Route::get('/dashboard/courses/edit/{id}','App\Http\Controllers\admin\coursecontroller@edit')->name('admin.course.edit');
    Route::POST('/dashboard/courses/update','App\Http\Controllers\admin\coursecontroller@update')->name('admin.course.update');


