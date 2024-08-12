<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post_
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Mahadi Dwi Nugraha",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium recusandae ad, quis illo ipsam dolorum consectetur corporis facere? Officia ducimus quia illum reprehenderit adipisci quos ad perspiciatis nihil numquam nulla."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhammad Fatih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium recusandae ad, quis illo ipsam dolorum consectetur corporis facere? Officia ducimus quia illum reprehenderit adipisci quos ad perspiciatis nihil numquam nulla."
        ]
    ];

    public static function all(){

        return collect(self::$blog_post);
    }

    public static function find($slug){

        $posts = static::all();
        return $posts->firstWhere('slug', "=", $slug);

    }


}
