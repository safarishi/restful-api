<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['domain' => 'api.app.com'], function () {
    Route::get('/', function () {
        return [
            'current_user_url'    => 'http://api.app.com/user',
            'user_url'            => 'http://api.app.com/users/{user}',
            'team_url'            => 'http://api.app.com/teams',
            'search_user_url'     => 'http://api.app.com/search/users{?q,page,per_page,sort,order}',
            'search_articles_url' => 'http://api.app.com/search/articles{?q,page,per_page,sort,order}',
        ];
    });
});
