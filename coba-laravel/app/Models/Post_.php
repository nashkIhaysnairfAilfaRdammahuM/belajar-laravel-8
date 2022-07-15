<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rafli Afriansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa vero, dolores similique accusantium consequatur facere veniam repellendus ipsam fugit suscipit quas est eligendi repellat placeat in voluptatibus minus molestias unde modi nihil eaque deserunt odio recusandae. Error nesciunt animi accusamus itaque vero enim ullam fugiat praesentium illo velit, id ducimus? Consequuntur accusantium quaerat est illo, consectetur earum aperiam natus. Quam eum asperiores repudiandae dolorum cupiditate natus voluptates animi officia est cumque quos accusantium eligendi reprehenderit ratione nam voluptatum, fuga facilis."
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Haysnairfa Ilfar",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus error sapiente reiciendis saepe, eaque quisquam totam laboriosam adipisci nisi reprehenderit cumque tempora culpa aspernatur eligendi vero soluta illum nostrum quaerat voluptatum. Vero, vitae reiciendis quo non ratione fugit a esse libero, ad sit at quaerat quae. Optio maiores minima molestias repellendus dolores sapiente possimus quam id voluptates aperiam, architecto eius itaque beatae sunt molestiae suscipit sequi. Nihil, asperiores! Laudantium laboriosam a vero incidunt. Voluptate magnam quae fuga quod, ipsam necessitatibus accusamus animi sequi exercitationem alias consectetur dolor nam ut quas expedita eaque aperiam fugiat et debitis! Eligendi suscipit magni possimus!"
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
