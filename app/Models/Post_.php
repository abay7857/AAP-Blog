<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Asyim Akbar Prayitna",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat odio, cum quisquam ea ut ex nihil rerum alias. Doloribus molestiae nam beatae nisi tenetur molestias nemo delectus unde ipsam ratione blanditiis recusandae, quam dolores distinctio vitae cupiditate pariatur natus accusantium expedita aliquam consequuntur quis. Assumenda maxime ullam accusamus libero dolores, optio nisi ab qui, odit quia nihil reiciendis sapiente rerum quas molestiae at, repellendus mollitia sunt iure rem! Cupiditate voluptatem hic alias error aliquam incidunt quam expedita minus aspernatur sed."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Tony Martinez",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil excepturi aliquam, maiores perspiciatis corrupti labore velit nostrum quia placeat recusandae soluta molestias, nulla cumque vitae necessitatibus natus voluptatem aspernatur impedit, amet iste repudiandae error explicabo mollitia. In aperiam ratione debitis eius totam, dolorum ipsa ea voluptatum, perspiciatis repellat tenetur dolores incidunt veniam aliquam voluptates magni quisquam nisi exercitationem amet alias eveniet! Alias impedit culpa quaerat unde iusto quasi doloremque voluptates veritatis, rem nihil dolorum id voluptatibus corporis ducimus consectetur sequi minus aliquid repellendus corrupti vitae eligendi ad obcaecati consequuntur similique? Enim nostrum explicabo nesciunt doloribus, ab similique hic voluptas praesentium?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts =  static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
