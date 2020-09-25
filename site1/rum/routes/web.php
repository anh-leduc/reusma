<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mockery\CountValidator\AtMost;

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

//Home Route
Route::get('/', [
    'uses' => 'TopController@index',
    'as' => 'users-list'
]);

Route::prefix('home')->group(function(){
    Route::get('/','TopController@index')->name('home');

    Route::get('/resourceUsage','TopController@resourceUsage')->name('resourceUsage');
    
    Route::get('/projectEffort','TopController@projectEffort')->name('projectEffort');
    
    Route::get('/employeeStructure','TopController@employeeStructure')->name('employeeStructure');

    
});
//Project Route
Route::prefix('project')->group(function(){
    Route::get('/','ProjectController@index')->name('list_project');
    Route::post('/add','ProjectController@add')->name('add_project');
    Route::get('/projDetail','ProjDetailController@index')->name('projDetail');
    // Route::get('/{id}',['uses' => 'ProjDetailController@index','as' => '/{id}']);
    // Route::post('/{id}',['uses' => 'ProjDetailController@editProject','as' => '/{id}']);
    Route::match(['get','post'],'/{id}',['uses' => 'ProjDetailController@index','as' => '/{id}']);
    Route::match(['get','post'],'/{id}/projEffort',['uses' => 'ProjDetailController@projEffort','as' => '/{id}/projEffort']);
    //Route::match(['get','post'],'/{id}/projMember',['uses' => 'ProjDetailController@projMember','as' => '/{id}/projMember']);
    Route::get('/checkId/{id}','ProjectController@checkId')->name('checkId_project');
    Route::get('/delete/{id}','ProjectController@delete')->name('delete_project');
});

//Employee Route
Route::prefix('employee')->group(function(){
    Route::get('/','EmployeeController@index')->name('list_employee');
    Route::post('/add','EmployeeController@add')->name('add_employee');
    Route::get('/checkUser/{username}','EmployeeController@checkUser')->name('checkUser');
    Route::match(
        ['get','post'],
        '/{id}',
        ['uses' => 'EmployeeDetailController@index','as' => '/{id}']
    );
    Route::match(
        ['get','post'],
        '/{id}/employeeEffort',
        ['uses' => 'EmployeeDetailController@employeeEffort','as' => '/{id}/employeeEffort']
    );
});

Auth::routes();

Route::get('logout', function(){
    Auth::logout();
    return redirect('/login');
});

Route::get('lang/{lang}','Controller@changeLang')->name('lang');

