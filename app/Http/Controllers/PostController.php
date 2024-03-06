<?php
   
   namespace App\Http\Controllers{
       use App\Models\Category;
       use Illuminate\Http\Request;
       use App\Models\Post;
       use App\Models\User;
       class PostController extends Controller
       {
           public function index()
           {
               $title ='';
               if(request('category')){
                   $category = Category::firstWhere('slug', request('category'));
                   $title =' in '. $category->name;
               }
               if(request('author')){
                   $author =User::firstWhere('username',request('author'));
                   $title =' by ' . $author->name;
               }
            return view('/post',[
                "title" => "ALL POSTS".$title,
                "active"=>"Posts",
                // "post" =>  Post::all()
                "post" =>  Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString()
                ]);
               
           }
           public function show(Post $posts)
           {
            return view('posts',[
                "title"=>"Single post",
                "posts" => $posts,
                "active"=>"Posts"
            ]);
       }
      
        }
   }
?>