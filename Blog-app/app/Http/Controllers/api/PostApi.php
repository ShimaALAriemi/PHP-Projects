<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\blogs;
use Illuminate\Http\Request;

class PostApi extends Controller
{
    public function allPosts(){
        return blogs::all();
    }

    public function getPosts($postId){
        $post = blogs::findorfail($postId); 
        return $post;
    }
}
