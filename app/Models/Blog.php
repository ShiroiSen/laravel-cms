<?php

namespace App\Models;

class Blog
{
    private static $blogPosts = [
        [
            "title" => "Ayam Goreng",
            "slug" => "ayam-goreng",
            "author" => "rossi",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias itaque minima, maiores aperiam ut autem qui aut fugiat. Quibusdam dolore atque, harum porro, molestias eos totam eaque nisi nobis hic blanditiis repellendus ipsam mollitia sunt optio neque tenetur inventore ab sit, dicta temporibus quasi autem beatae ea? Quos consequuntur provident, quis est deleniti doloremque aspernatur labore similique expedita cumque facere nihil autem itaque. Est dolorem veniam non molestias iusto a, voluptate sit delectus praesentium temporibus nisi fugit sed odio voluptates."
        ],
        [
            "title" => "Ayam Bakar",
            "slug" => "ayam-bakar",
            "author" => "issor",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias itaque minima, maiores aperiam ut autem qui aut fugiat. Quibusdam dolore atque, harum porro, molestias eos totam eaque nisi nobis hic blanditiis repellendus ipsam mollitia sunt optio neque tenetur inventore ab sit, dicta temporibus quasi autem beatae ea? Quos consequuntur provident, quis est deleniti doloremque aspernatur labore similique expedita cumque facere nihil autem itaque. Est dolorem veniam non molestias iusto a, voluptate sit delectus praesentium temporibus nisi fugit sed odio voluptates."
        ],
        [
            "title" => "Ayam Panggang",
            "slug" => "ayam-panggang",
            "author" => "sosri",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias itaque minima, maiores aperiam ut autem qui aut fugiat. Quibusdam dolore atque, harum porro, molestias eos totam eaque nisi nobis hic blanditiis repellendus ipsam mollitia sunt optio neque tenetur inventore ab sit, dicta temporibus quasi autem beatae ea? Quos consequuntur provident, quis est deleniti doloremque aspernatur labore similique expedita cumque facere nihil autem itaque. Est dolorem veniam non molestias iusto a, voluptate sit delectus praesentium temporibus nisi fugit sed odio voluptates."
        ],
        [
            "title" => "Ayam Betutu",
            "slug" => "ayam-betutu",
            "author" => "siros",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias itaque minima, maiores aperiam ut autem qui aut fugiat. Quibusdam dolore atque, harum porro, molestias eos totam eaque nisi nobis hic blanditiis repellendus ipsam mollitia sunt optio neque tenetur inventore ab sit, dicta temporibus quasi autem beatae ea? Quos consequuntur provident, quis est deleniti doloremque aspernatur labore similique expedita cumque facere nihil autem itaque. Est dolorem veniam non molestias iusto a, voluptate sit delectus praesentium temporibus nisi fugit sed odio voluptates."
        ],
    ];

    public static function  all()
    {
        return self::$blogPosts;
    }

    public static function find($slug)
    {
        $blogs = self::$blogPosts;
        $blog = [];
        foreach($blogs as $b) {
            if($b ["slug"] === $slug) {
                $blog = $b;
            }
        }

        return $blog;
    }
    
}
