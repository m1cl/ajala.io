<?php

namespace App\Http\Controllers;

use App\Post;

class BlogController extends Controller
{
  public function getIndex() {

    /* Get all posts from the database */
    $posts = Post::orderBy('id', 'desc')->paginate(10);

    /* return the view with the posts variable */
    return view('blog.index')->withPosts($posts);
  }

  public function getSingle($slug) {
    
    // fetch from the DB based on slug
    $post = Post::where('slug', '=' , $slug)->first();

    //  return the view and pass in the post object
    return view('blog.single')->withPost($post);
  }
}
