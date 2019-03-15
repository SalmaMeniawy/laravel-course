<?php

use Illuminate\Http\Request;
// use App\Http\Resources\PostResource;
// use App\Post;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/posts','Api\PostsController@index')->middleware('auth:api');
// Route::get('/posts', function () {
//     return new PostResource (Post::paginate());
// });
Route::get ('/posts/{post}' , 'Api\PostsController@show')->middleware('auth:api');
Route::post('posts','Api\PostsController@store')->middleware('auth:api');