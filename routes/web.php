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

Auth::routes();

Route::get('/', 'WebsiteController@index')->name('website.index');

Route::group(['middleware' => ['auth']], function()
{
    Route::get('home', 'UserController@dashboard')->name('user.dashboard');
    Route::resource('projects', 'ProjectController');
});

/** Development routes */
Route::get('users', function()
{
    $users = \App\User::all()->toArray();

    foreach ($users as $id => $user)
    {
        $users[$id]['sso_link'] = url('users/sso/' . $user['id']);
    }

    return $users;
});

Route::get('users/sso/{user}', function (\App\User $user)
{
    Auth::login($user);

    return redirect(route('user.dashboard'));
});
