<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post // extends Model
{
    // use HasFactory;
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Marcell Budi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique sint soluta consequatur quos modi esse. Autem nobis, doloremque doloribus tempora suscipit quod, molestias, repellat fugiat asperiores totam impedit aspernatur reiciendis."
        ], 
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Marcell",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium sint molestiae error eveniet nihil maxime provident aliquid, ratione corporis ipsam quis corrupti saepe dolorum sit accusantium modi magnam vero debitis fugiat consectetur eos ex sunt dicta. Dolor asperiores delectus, dicta aliquam, placeat velit quaerat dignissimos nam consequatur facere sunt. Molestiae quidem omnis maiores placeat sapiente officia harum neque pariatur non ex natus odio totam reiciendis excepturi doloribus dolore labore, dolorum in expedita quisquam temporibus cupiditate nesciunt. Nemo doloribus laudantium illo perspiciatis minus quae esse aperiam, asperiores est id fugit vel libero magnam adipisci! Ab, sunt! Quos repellendus aliquam dolorum vel!"
        ], 
    
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
