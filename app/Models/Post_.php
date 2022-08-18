<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static  $blog_posts =[
        [
            "title" => "Kosan banguntapan",
            "slug" => "kost-banguntapan",
            "aouthor" => "Kosan ",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt non, fugit tempore, 
            neque cum distinctio praesentium nihil, reprehenderit eius quae ab! Magni, cupiditate. 
            Illum voluptatem nobis delectus obcaecati, esse, porro in eveniet aut voluptas exercitationem doloremque 
            eius maxime unde id sequi natus excepturi voluptatibus voluptatum adipisci explicabo alias? 
            Corrupti sapiente tempore doloremque, expedita alias at quas dolores veniam fuga eos. Impedit accusamus possimus voluptates aspernatur sit repudiandae blanditiis iure 
            deserunt neque ea quod, molestiae fuga necessitatibus odio iusto numquam harum.",
        ],
        [
            "title" => "Kosan bkjb",
            "slug" => "kost-banguntapan-1",
            "aouthor" => "Kosan 1 ",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt non, fugit tempore, 
            neque cum distinctio praesentium nihil, reprehenderit eius quae ab! Magni, cupiditate. 
            Illum voluptatem nobis delectus obcaecati, esse, poqegqeggqegqeggqefqefqefqefqefrro in eveniet 
            aut voluptas exercitationem doloremque 
            eius maxime unde id sequi natus excepturi voluptatibus voluptatum adipisci explicabo alias? 
            Corrupti sapiente tempore doloremque, expedita alias at quas dolores veniam fuga eos. 
            ",
        ],
        ];

        public static function all()
        {
            return collect(self::$blog_posts);
        }
        public static function find($slug)
        {
            $posts = static::all();
            
            return $posts->firstwhere('slug', $slug);
        } 
}
