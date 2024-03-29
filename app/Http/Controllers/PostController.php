<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Cloudinary;
use App\Models\Textbook;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/posts/create');  //create.blade.phpを表示
        // return view('texts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post, Textbook $textbook)
    {

        $input = $request['post'];
        $input += ['user_id'=>Auth::id()];
        $post->fill($input)->save();

        foreach( $request->file('images') as $file ) {
          $image_url = Cloudinary::upload($file->getRealPath())->getSecurePath();

          $image = new Image();
          $image->post_id = $post->id;
          $image->image_url = $image_url;
          $image->save();
        }
        
        $input_textbook = $request['textbook'];
        $input_textbook += ['post_id' => $post->id];
        $input_textbook += ['department_id' => Auth::user()->department_id];
        $textbook->fill($input_textbook)->save(); 
        return redirect('/posts/' . $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     * @params Object Text
     * @return Reposnse text view
     */
    public function show(Post $post, Text $text)
    {
        return view('posts.show')->with(['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $input_post = $request['post'];
    $post->fill($input_post)->save();

    return redirect('/posts/' . $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
}
