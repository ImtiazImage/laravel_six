<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about')->name('aboutPage');
Route::get('/contact', 'HomeController@contact')->name('contactPage');

Route::get(md5('/add-post'), 'PostController@writePost')->name('write.post');
Route::post('/store-post', 'PostController@StorePost')->name('store.post');
Route::get('/all-posts','PostController@AllPosts')->name('all.post');
Route::get('/view-single-post/{id}', 'PostController@ViewPost');
Route::get('/delete-post/{id}', 'PostController@DeletePost');
Route::get('/edit-post/{id}', 'PostController@EditPost');
Route::post('/update-post/{id}', 'PostController@UpdatePost');

// category crud 
Route::get('/add-category', 'boloController@AddCategory')->name('add.category');
Route::post('/store-category', 'boloController@StoreCategory')->name('store.category');
Route::get('/all-category', 'boloController@AllCategories')->name('all.category');
Route::get('/single-view-category/{id}', 'boloController@SingleViewCategory');
Route::get('/delete-category/{id}', 'boloController@DeleteCategory');
Route::get('/edit-category/{id}', 'boloController@EditCategory');
Route::post('/update-category/{id}', 'boloController@UpdateCategory');

// Student
Route::get('students','StudentController@Student')->name('student');
Route::post('store-student','StudentController@Store')->name('store.student');
Route::get('all-students','StudentController@index')->name('all.students');
Route::get('view-single-student/{id}','StudentController@SingleViewStudent');
Route::get('delete-student/{id}', 'StudentController@Destroy');
Route::get('edit-student/{id}', 'StudentController@Edit');
Route::post('update-student/{id}', 'StudentController@Update');

Route::prefix('gt')->group(function() {  
    Route::get('home',function(){
        echo " you are under the required age limit!";
    })->middleware('age');
});
