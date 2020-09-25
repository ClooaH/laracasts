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
    
    public function show($post) {
        $posts = [
            'yes1' => 'my first yes ever',
            'yes2' => 'second yes',
            'yes3' => 'third...?'
        ];
    
        if (!array_key_exists($post, $posts)) {
            abort(404, 'sorry, not found');
        }
    
        return view('post', [
            'post' => $posts[$post]
        ]);
    }
}
