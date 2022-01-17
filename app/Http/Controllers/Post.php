<?php

namespace App\Http\Controllers;

class Post 
{
    private static $blog_post=[
    [
        "title"=>"judul Pertama",
        "slug"=>"judul_pertama",
        "author"=>"budi",
        "body"=>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat explicabo soluta minima a tempore,    
        necessitatibus quasi dolores fuga corporis aspernatur iusto expedita molestias molestiae temporibus! 
        Voluptas consequuntur quisquam odio tempora natus enim corrupti inventore aliquid nisi, similique ipsa nostrum, 
        dolorum, assumenda officiis voluptatum. Blanditiis sapiente, vel rerum mollitia laboriosam nihil deserunt ea maxime, 
        id hic cupiditate est in vitae molestias enim accusantium, quos quidem illo eum aut nisi esse! Placeat facilis quaerat assumenda sunt. 
        Pariatur ducimus nisi recusandae facilis magnam?"
    ],
    [
        "title"=>"judul kedua",
        "slug"=>"judul_kedua",
        "author"=>"anto",
        "body"=>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat explicabo soluta minima a tempore,    
        necessitatibus quasi dolores fuga corporis aspernatur iusto expedita molestias molestiae temporibus! 
        Voluptas consequuntur quisquam odio tempora natus enim corrupti inventore aliquid nisi, similique ipsa nostrum, 
        dolorum, assumenda officiis voluptatum. Blanditiis sapiente, vel rerum mollitia laboriosam nihil deserunt ea maxime, 
        id hic cupiditate est in vitae molestias enim accusantium, quos quidem illo eum aut nisi esse! Placeat facilis quaerat assumenda sunt. 
        Pariatur ducimus nisi recusandae facilis magnam?"
    ]
    ];

    public static function all(){
        return collect(self::$blog_post);
    }
    public static function find($slug)
    {
    $posts= static::all();
      
    return $posts->firstwhere('slug',$slug);
    }
}
