<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function show($slug) {

        $post = \DB::table('posts')->where('slug', $slug)->first();
    
        return view('post', [
            'post' => $post
        ]);
    }
}
