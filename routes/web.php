<?php
use App\Project;
use App\Category;
use App\Image;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/','TempController@index');
Route::get('template/about','NavController@nav1');
Route::get('template/service','NavController@nav2');
Route::get('template/portfolio','NavController@nav3');
Route::get('template/contact','NavController@nav4');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('read', function () {
    $projects = Project::all();
    
     foreach ($projects as $project ) {
        echo $project->categories()->get();
     }
});

Route::get('data', function () {
    $projects = Category::find(2)->projects()->get();
    foreach ($projects as $project ) {
        echo $project;
    }
});

Route::resource('pic', 'JoinsController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
