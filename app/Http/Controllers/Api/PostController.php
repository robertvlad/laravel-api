<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {

        $posts = Post::with('technologies', 'type')->paginate(3);

        return response()->json([
            'success' => true,
            'posts' => $posts
        ]);
    }

    public function show($slug) {

        $post = Post::with('technologies', 'type')->where('slug', $slug)->first();

        if ($post) {

            return response()->json([
                'succes' => true,
                'post'   => $post
            ]);
        }
        else {
            
            return response()->json([
                'succes' => false,
                'post'   => 'Nessun post trovato'
            ]);
        }
    }
}
