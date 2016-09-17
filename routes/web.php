<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
//    $post = App\Post::find(1);
//    $comment =  App\Comment::find(1);
//    $reply = new App\Comment;
//    $reply->user_id = 1;
//    $reply->body = 'Reply to new comment';
//    $post->comments()->save($comment);
//    $comment->replies()->save($reply);

// $post = App\Post::find(2);
// echo $post->body.'<br>';
// echo $post->media->body;
// foreach ($post->comments as $reply){
// echo '<li>';
//     echo $reply->body.'<br>';
// echo '</li>';
// foreach($reply->replies as $rep){
//     echo $rep->body.'<br>';
// }
// }

// $media = new App\Media;
// $media->body = ' New Image';
// $media->media_type = 'image';
// $post = App\Post::find(2);
// $post->media()->save($media);
});

Auth::routes();

 Route::get('/', 'HomeController@index');
Route::resource('/posts', 'PostController');
Route::resource('/comment', 'CommentController');
