<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Crypto;
use App\Models\CryptoUser;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $data['userCount']=User::all()->count();
        $data['postCount']=Post::all()->count();
        $data['categoryCount']=Category::all()->count();
        $data['tagCount']=Tag::all()->count();
        $data['cryptoCount']=Crypto::all()->count();
        $data['cryptoUserCount']=CryptoUser::all()->count();
        //return redirect()->route('personal.main.index');
        return view('main.index', compact('data'));
        /*$posts = Post::paginate(6);
        $randomPosts = Post::get()->random(4);
        $likedPosts = Post::withCount('likedUser')->OrderBy('liked_user_count', 'DESC')->get()->take(3);
        return view('main.index', compact('posts', 'randomPosts', 'likedPosts'));*/
    }
}
