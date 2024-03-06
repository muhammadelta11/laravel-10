<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller{

    public function index(){  

      return view('dashboard.categories.index',[
        'categories' => Category::all()
      ]);
    }

    public function create(){
      return view('dashboard.categories.create',[
        'categories' => Category::all()
      ]);
    }

    public function store(Request $result){

    }

    public function show(){
      return 
           view('dashboard.categories.show',[
               'category'=>$category
           ]);

    }

    public function edit(){

    }
    
    public function update(){

    }

    public function destroy($category){
     
    //Category::destroy($name->id);
    //$category->destroy();
    return redirect('/dashboard/categories')->with('success','success delete post');
    }
}
?>