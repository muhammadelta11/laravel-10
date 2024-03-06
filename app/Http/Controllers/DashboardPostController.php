<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
/**
  * @return\illuminate\Http\Response
*/
{
    public function index()
    {
    
       return view('dashboard.post.index',[
           'post'=> Post::where('user_id', auth()->user()->id)->get()
       ]);
    }

    public function create()
    {
        return view('dashboard.post.create',[
            'category'=> Category::all()
        ]);
    }

    /**
     * @param \illuminate\http\Request
     *  @return \illuminate\http\Response
     */

     public function store(Request $request)
     {

        // return $request->file('image')->store('post-image');
         $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug'  =>  'required|unique:posts',
            'category_id'=>'required',
            'image'=>'image|file|max:1024',
            'body'=>'required']
         );
            if($request->file('image')){
                $validateData['image']= $request->file('image')->store('post-image');
            }

         $validateData['user_id'] = auth()->user()->id;
         $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200);

         Post::create($validateData);
         return redirect('/dashboard/post')->with('success','new post hedden success');

    }
     /**
      * @param \App\Models\Post $posts
      * @return \illuminate\Http\Response
      */

     public function show(Post $post)
     {
           return 
           view('dashboard.post.show',[
               'posts'=>$post
           ]);
     }

     public function edit(Post $post)
     {
        return view('dashboard.post.edit',[
            'posts'=> $post,
            'category'=> Category::all()
        ]);
     }

     public function update(Request $request, Post $post)
     {
        $rules = [
            'title' => 'required|max:255',
            'category_id'=>'required',
            //'slug'=>'required|unique:posts',
            'image'=>'image|file|max:1024',
            
            'body'=>'required'];

         if($request->slug != $post->slug){
           $rules['slug']='required|unique:posts';
         }
         $validateData=$request->validate($rules);

         if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validateData['image']= $request->file('image')->store('post-image');
        }

         $validateData['user_id'] = auth()->user()->id;
         $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200);

         Post::where('id',$post->id)
              ->update($validateData);
         return redirect('/dashboard/post')->with('success','update post hedden success');

        }

     public function destroy(Post $post)
     {
        if($post->image){
            Storage::delete($post->image);
        }
        Post::destroy($post->id);
    //   $posts->delete();
        return redirect('/dashboard/post')->with('success','success delete post');

         
     }
     public function checkSlug(Request $request)
    {
       $slug = SlugService::createSlug(Post::class,'slug',$request->title);
       return response()->json(['slug' =>$slug]);
    }
}
