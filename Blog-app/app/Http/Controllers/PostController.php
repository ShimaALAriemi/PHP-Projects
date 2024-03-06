<?php

namespace App\Http\Controllers;


use App\Models\blogs;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function Index()
    {
        $globalpost = blogs::all();

        // $globalpost = [
        //     ['id' => 1 , 'name' => 'hello world' , 'postedby' => 'Asma'],
        //     ['id' => 2 , 'name' => 'hello world' , 'postedby' => 'Sara'],
        //     ['id' => 3 , 'name' => 'hello world' , 'postedby' => 'Ahmed'],

        // ];
        return view('Post.index', ['posts' => $globalpost]);
    }

    public function create()
    {


        return view('Post.create');
    }

    public function show($postId)
    {

        $getPost = blogs::findorfail($postId);

        return view('Post.show', ['post' => $getPost]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $title = $request->title;
        $description = $request->description;

        blogs::create([
            'title' => $title,
            'description' => $description
        ]);

        return to_route('post');
    }


    public function edit($postId)
    {

        $getPost = blogs::findorfail($postId);


        return view('Post.update', ['post' => $getPost]);
    }

    public function update(Request $request, $postId)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $post = blogs::findorfail($postId);

        $post->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return to_route('post');
    }

    public function delete($postId)
    {

        $getPost = blogs::findorfail($postId);
        $getPost->delete();

        return to_route('post');
    }


    // $data = $_POST ;
    // $data = Request()->title;
    // $descrition = Request()->description;
    // dd($data , $descrition);

    // $validatedData = $request->validate([
    //     'title' => 'required|string|max:255',
    //     'description' => 'required|string',
    // ]);
}
