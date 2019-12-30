<?php

use App\Post;
use App\User;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/posts', 'PostController');

// Route::resource('/contact/{id}', 'VehicleController@show_views');

Route::resource('/contact', 'PostController@contact');

// Route::get('/insert', function(){
//     $value = ['PHP laravel title', 'I love laravle'];
//     DB::insert("insert into posts(title, body) values(?, ?)", $value);
// });

// Route::get('/read', function(){
//     $id = ['1'];
//     $results = DB::select("select * from posts where id = ?", $id);

//     if($results){
//         foreach($results as $result){
//             return "title is ". $result->title . " body is ". $result->body;
//         }
//     }
// });


// Route::get('/user/{id}', function($id){
//      return User::find($id)->post;
// });

// Route::get('/post/{id}/user', function($id){
    
//     return Post::find($id)->user->name;

// });

// Route::get('/posts', function(){
    
//     $user = User::find(1);
    
//     foreach($user->posts as $post){
//         echo $post->title. "<br>";
//     }
// });


#get roles
// Route::get('{uid}/roles', function($uid){
    
//     // $user = User::find($uid)->roles()->orderBy('id', 'desc')->get();
//     $user = User::find($uid);
    
//     foreach($user->roles as $role){
//         echo $user->name. ' is '. $role->name. "<br>";
//     }
// });

/**
 * Eloquent
 */

// Route::get('/find', function(){
//     $posts = Post::find(2);
//     return $posts->body;
// });


#Eloquent insert
// Route::get('basic_update', function(){
    
    
//     $post = Post::whereUser_id(1)->first();

//     $post->body = 'I love you but I don\'t know what love is';
//     $post->save();

// });

#Eloquent update
// Route::get('/basic_update', function(){
//     // method 1
//     // $post = Post::find(2);

//     // $post->title = 'New post Eloquent title 2';
//     // $post->body = 'New Post Body 2';
//     // $post->save();

//     // method 2

//     Post::where('id', '3')->update(['title'=> '2019-10-09 Title', 'body' => '2019-10-09 body']);
// });

//

