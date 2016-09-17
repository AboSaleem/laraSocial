<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class Post extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testAddTextualPost()
    {
        $textPost = new Post;
        $textPost->body = "Text Post";
        $textPost->user_id= Auth::id();
        $textPost->save();

        $this->visit('/post/1')
             ->see('Text Post');

    }

    public function testAddCommentToPost()
    {
        $post = Post::find(1);
        $comment = new Comment;
        $comment->body= "new Comment";
        $comment->user_id = Auth::id();
        $post->comments()->save($post);
          $this->visit('/post/1')
             ->see('new Comment');

    }
}
