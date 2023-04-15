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

Route::get('/', function () {
    return view('welcome');
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('teams')->name('teams/')->group(static function() {
            Route::get('/',                                             'TeamController@index')->name('index');
            Route::get('/create',                                       'TeamController@create')->name('create');
            Route::post('/',                                            'TeamController@store')->name('store');
            Route::get('/{team}/edit',                                  'TeamController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'TeamController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{team}',                                      'TeamController@update')->name('update');
            Route::delete('/{team}',                                    'TeamController@destroy')->name('destroy');
            Route::get('/download',                                    'TeamController@export')->name('export');
            
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('portofolios')->name('portofolios/')->group(static function() {
            Route::get('/',                                             'PortofolioController@index')->name('index');
            Route::get('/create',                                       'PortofolioController@create')->name('create');
            Route::post('/',                                            'PortofolioController@store')->name('store');
            Route::get('/{portofolio}/edit',                            'PortofolioController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PortofolioController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{portofolio}',                                'PortofolioController@update')->name('update');
            Route::delete('/{portofolio}',                              'PortofolioController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('pegawais')->name('pegawais/')->group(static function() {
            Route::get('/',                                             'PegawaiController@index')->name('index');
            Route::get('/create',                                       'PegawaiController@create')->name('create');
            Route::post('/',                                            'PegawaiController@store')->name('store');
            Route::get('/{pegawai}/edit',                               'PegawaiController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PegawaiController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{pegawai}',                                   'PegawaiController@update')->name('update');
            Route::delete('/{pegawai}',                                 'PegawaiController@destroy')->name('destroy');
        });
    });
});