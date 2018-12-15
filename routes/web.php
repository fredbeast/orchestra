<?php

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
use App\Post;
use App\Job;

Route::get('/', function () {
    $posts = Post::orderBy('created_at', 'desc')->take(4)->get();
    $jobs = Job::orderBy('created_at', 'desc')->take(4)->get();

    return view('index', compact('posts', 'jobs'));
});

Route::get('/about', function () {
    $posts = Post::orderBy('created_at', 'desc')->take(4)->get();
    $jobs = Job::orderBy('created_at', 'desc')->take(4)->get();

    return view('about', compact('posts', 'jobs'));
});

Route::get('/blog', 'BlogController@index');
Route::get('/blog/{id}', 'BlogController@show');


Route::get('/jobs/', 'WorkController@index');
Route::get('/jobs/{id}', 'WorkController@show');


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::resource('posts', 'PostsController')->except([
        'destroy'
    ]);
    Route::delete('/posts/{id}', 'PostsController@destroy');

    Route::resource('jobs', 'JobsController')->except([
        'destroy'
    ]);
    Route::delete('/jobs/{id}', 'JobsController@destroy');

    Route::get('/home', 'HomeController@index')->name('home');

});

Route::group(['prefix' => 'admin'], function () {
    Auth::routes(['register' => false]);
});

// Redirect for ease

Route::get('/admin', function () {
    return redirect(route('home'));
});
