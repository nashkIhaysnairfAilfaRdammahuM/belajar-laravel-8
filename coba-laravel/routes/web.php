<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Rafli Afriansyah",
        "email" => "nashkihaysnairfailfardammahum@gmail.com",
        "image" => "suisei-lookalike.png"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rafli Afriansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa vero, dolores similique accusantium consequatur facere veniam repellendus ipsam fugit suscipit quas est eligendi repellat placeat in voluptatibus minus molestias unde modi nihil eaque deserunt odio recusandae. Error nesciunt animi accusamus itaque vero enim ullam fugiat praesentium illo velit, id ducimus? Consequuntur accusantium quaerat est illo, consectetur earum aperiam natus. Quam eum asperiores repudiandae dolorum cupiditate natus voluptates animi officia est cumque quos accusantium eligendi reprehenderit ratione nam voluptatum, fuga facilis."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Haysnairfa Ilfar",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus error sapiente reiciendis saepe, eaque quisquam totam laboriosam adipisci nisi reprehenderit cumque tempora culpa aspernatur eligendi vero soluta illum nostrum quaerat voluptatum. Vero, vitae reiciendis quo non ratione fugit a esse libero, ad sit at quaerat quae. Optio maiores minima molestias repellendus dolores sapiente possimus quam id voluptates aperiam, architecto eius itaque beatae sunt molestiae suscipit sequi. Nihil, asperiores! Laudantium laboriosam a vero incidunt. Voluptate magnam quae fuga quod, ipsam necessitatibus accusamus animi sequi exercitationem alias consectetur dolor nam ut quas expedita eaque aperiam fugiat et debitis! Eligendi suscipit magni possimus!"
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('/posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rafli Afriansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa vero, dolores similique accusantium consequatur facere veniam repellendus ipsam fugit suscipit quas est eligendi repellat placeat in voluptatibus minus molestias unde modi nihil eaque deserunt odio recusandae. Error nesciunt animi accusamus itaque vero enim ullam fugiat praesentium illo velit, id ducimus? Consequuntur accusantium quaerat est illo, consectetur earum aperiam natus. Quam eum asperiores repudiandae dolorum cupiditate natus voluptates animi officia est cumque quos accusantium eligendi reprehenderit ratione nam voluptatum, fuga facilis."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Haysnairfa Ilfar",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus error sapiente reiciendis saepe, eaque quisquam totam laboriosam adipisci nisi reprehenderit cumque tempora culpa aspernatur eligendi vero soluta illum nostrum quaerat voluptatum. Vero, vitae reiciendis quo non ratione fugit a esse libero, ad sit at quaerat quae. Optio maiores minima molestias repellendus dolores sapiente possimus quam id voluptates aperiam, architecto eius itaque beatae sunt molestiae suscipit sequi. Nihil, asperiores! Laudantium laboriosam a vero incidunt. Voluptate magnam quae fuga quod, ipsam necessitatibus accusamus animi sequi exercitationem alias consectetur dolor nam ut quas expedita eaque aperiam fugiat et debitis! Eligendi suscipit magni possimus!"
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});