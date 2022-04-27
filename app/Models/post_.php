<?php

namespace App\Models;



class post
{
    private static $post = [[
        "judul" => "Lorem-Loreman",
        "slug" => "lorem-loreman",
        "pengarang" => "Fatih AF",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam beatae dolorem reprehenderit facilis quo similique, natus nemo fugit expedita sit soluta mollitia neque adipisci unde, exercitationem accusamus non impedit asperiores molestiae. Quisquam cumque autem aliquid asperiores at repellat maxime quod praesentium modi delectus suscipit non omnis totam, illo, sint iusto molestiae vitae nobis! Sint praesentium quis, commodi maxime sapiente eligendi ipsa magnam, nemo eum quos qui corporis, voluptatem tenetur molestiae. Provident at odio veritatis sequi animi laborum rem ad expedita."
    ],
    [
        "judul" => "Ipsum-Ipsuman",
        "slug"=>"ipsum-ipsuman",
        "pengarang" => "Ucup Markucup",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut voluptatem, magni expedita odio labore cupiditate. Cupiditate, eligendi quasi harum perferendis veritatis, odio dolorum totam delectus numquam non modi ratione nihil. Enim velit accusamus dolorum nostrum laboriosam quo sed voluptate porro. Quasi non molestias sunt commodi est odio alias omnis corrupti hic velit reprehenderit mollitia quam optio, harum nobis neque tempora tempore ad. Fuga asperiores ex quia quam sequi corporis at, ratione eius placeat tenetur aperiam vel vero perferendis ipsa itaque. Unde voluptatibus provident praesentium optio sequi inventore, obcaecati deserunt eos nisi blanditiis? Vitae, in. Sunt consequuntur quod id, voluptate ab iste."
    ]
];

    public static function all(){
        return collect(self::$post);
    }

    public static function find($slug){
        $posts = static::all();
    return $posts->firstWhere("slug",$slug);
    }
}
