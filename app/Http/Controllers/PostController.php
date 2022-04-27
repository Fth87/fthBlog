<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\category;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $judul = '';
        if(request('category')){
            $category = Category::firstWhere('slug',request('category'));
            $judul = 'in '.$category->name;
        }
        if(request('author')){
            $author = User::firstWhere('username',request('author'));
            $judul = 'by '.$author->name;
        }

        return view(
            'posts',
            [
                "judul" => "All Posts " .$judul,
                "posts" => Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString(),
            ]
        );
    }
    public function view(Post $post)
    {
        return view("post", [
            "judul" => "single post",
            "post" => $post,
        ]);
    }
    // public function category(Category $category)
    // {
    //     return view('posts', [
    //         "judul" => "post by category : $category->name",
    //         "posts" => $category->posts->load('category', 'author'),
    //         "active" => "Categories"

    //     ]);
    // }
}
