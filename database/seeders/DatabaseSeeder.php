<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       


        // User::factory(3)->create();
        

        Category::create([
            "name"=>"Web Programing",
            "slug"=>"Web-Programing"
        ]);

        Category::create([
            "name"=>"Web-Design",
            "slug"=>"Web-Design"
        ]);
        Category::create([
            "name"=>"Personal",
            "slug"=>"Personal"
        ]);

        User::create([
            "name"=>"Muhammad Mas'ud",
            "username"=>"muhammadmasud",
            "email"=>"muhammadsmas998@gmail.com",
           "password"=>bcrypt("12345")
        ]);
        User::create([
            "name"=>"Muhammad iksan",
            "username"=>"muhammadiksan",
            "email"=>"muhammad998@gmail.com",
           "password"=>bcrypt("12345")
        ]);

       

        User::create([
            "name"=>"Muhammad Soleman",
            "username"=>"muhammadsoleman",
            "email"=>"muhammadelta@gmail.com",
           "password"=>bcrypt("12345")
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     "title"=>"Judul Pertama",
        //     "slug"=>"Judul-Pertama",
        //    "excerpt"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea odit nobis laborum illum corporis animi sunt commodi",
        //    "body"=> "nemo enim aut debitis, repellendus voluptatibus? Corrupti unde, minima perferendis nemo nisi provident rem adipisci eum aut ullam nulla facere, dolore harum voluptatem. Nam voluptatibus quasi veniam nesciunt vitae ipsam hic explicabo sapiente rem doloribus aut perferendis, asperiores labore error! Porro velit, placeat molestias aliquam enim possimus nesciunt recusandae cupiditate modi aliquid amet quasi, vel sapiente id labore nulla. Recusandae, praesentium hic? Culpa itaque distinctio tempora impedit nulla fugiat aliquid, quis accusantium excepturi magni tenetur voluptas explicabo iusto labore perferendis sequi optio sunt!",
        //    "category_id"=>1,
        //    "user_id"=>1
        // ]);

        // Post::create([
        //     "title"=>"Judul Kedua",
        //     "slug"=>"Judul-Kedua",
        //     "excerpt"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea odit nobis laborum illum corporis animi sunt commodi",
        //     "body"=> "nemo enim aut debitis, repellendus voluptatibus? Corrupti unde, minima perferendis nemo nisi provident rem adipisci eum aut ullam nulla facere, dolore harum voluptatem. Nam voluptatibus quasi veniam nesciunt vitae ipsam hic explicabo sapiente rem doloribus aut perferendis, asperiores labore error! Porro velit, placeat molestias aliquam enim possimus nesciunt recusandae cupiditate modi aliquid amet quasi, vel sapiente id labore nulla. Recusandae, praesentium hic? Culpa itaque distinctio tempora impedit nulla fugiat aliquid, quis accusantium excepturi magni tenetur voluptas explicabo iusto labore perferendis sequi optio sunt!",
        //     "category_id"=>1,
        //     "user_id"=>1
        // ]);

        // Post::create([
        //     "title"=>"Judul Ketiga",
        //     "slug"=>"Judul-Katiga",
        //     "excerpt"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea odit nobis laborum illum corporis animi sunt commodi",
        //     "body"=> "nemo enim aut debitis, repellendus voluptatibus? Corrupti unde, minima perferendis nemo nisi provident rem adipisci eum aut ullam nulla facere, dolore harum voluptatem. Nam voluptatibus quasi veniam nesciunt vitae ipsam hic explicabo sapiente rem doloribus aut perferendis, asperiores labore error! Porro velit, placeat molestias aliquam enim possimus nesciunt recusandae cupiditate modi aliquid amet quasi, vel sapiente id labore nulla. Recusandae, praesentium hic? Culpa itaque distinctio tempora impedit nulla fugiat aliquid, quis accusantium excepturi magni tenetur voluptas explicabo iusto labore perferendis sequi optio sunt!",
        //     "category_id"=>2,
        //     "user_id"=>1
        // ]);

        // Post::create([
        //     "title"=>"Judul Keempat",
        //     "slug"=>"Judul-Keempat",
        //     "excerpt"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea odit nobis laborum illum corporis animi sunt commodi",
        //     "body"=> "nemo enim aut debitis, repellendus voluptatibus? Corrupti unde, minima perferendis nemo nisi provident rem adipisci eum aut ullam nulla facere, dolore harum voluptatem. Nam voluptatibus quasi veniam nesciunt vitae ipsam hic explicabo sapiente rem doloribus aut perferendis, asperiores labore error! Porro velit, placeat molestias aliquam enim possimus nesciunt recusandae cupiditate modi aliquid amet quasi, vel sapiente id labore nulla. Recusandae, praesentium hic? Culpa itaque distinctio tempora impedit nulla fugiat aliquid, quis accusantium excepturi magni tenetur voluptas explicabo iusto labore perferendis sequi optio sunt!",
        //     "category_id"=>2,
        //     "user_id"=>2
        // ]);
    }
}


