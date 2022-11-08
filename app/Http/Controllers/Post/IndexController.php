<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(6);
        $randomPosts = Post::get()->random(4);
        $likedPosts = Post::withCount('likedUser')->OrderBy('liked_user_count', 'DESC')->get()->take(3);
        return view('post.index', compact('posts', 'randomPosts', 'likedPosts'));
    }
}
