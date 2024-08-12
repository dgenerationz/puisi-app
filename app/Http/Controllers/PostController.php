<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {

        $title = "";

        if (request('uuid')) {
            $category = Category::firstWhere('uuid', request('uuid'));
            $title = ' in ' . $category->uuid;
        }

        if (request('user')) {
            $user = User::firstWhere('username', request('user'));
            $title = ' in ' . $user->name;
        }


        return view('posts', [
            "title" => "Puisi",
            "active" => "posts",
            "posts" => Post::latest()->filter(request(['search', 'uuid', 'user']))->paginate(7)->withQueryString(),
        ]);
    }

    public function show(Post $post)
    {

        return view('post', [
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
