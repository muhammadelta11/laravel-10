@extends('layouts.main')
@section('container')
<br>
  <h1 class="mb-3 text-center"><b>{{$title}}</b></h1>
<div class="row justify-content-center mb-3">
   <div class="col-md-6">
     <form action="/Blog">
      @if (request('category'))
       <input    type="hidden" name="category" value="{{ request('category')}}">       
      @endif
      @if (request('author'))
      <input    type="hidden" name="author" value="{{ request('author')}}">       
     @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search....." name="search" value="{{request('search')}}">
        <button class="btn btn-success" type="submit">search</button>
      </div>
    </form>
   </div>
</div>

  @if ($post->count())
  <div class="card mb-3">
  @if($post[0]->image)
        <center><div style="overflow:hidden;">
        <img src="{{ asset('storage/'.$post[0]->image)}}" alt="{{$post[0]->category->name}}" class="img-fluid mt-3">
</div></center>
        @else    
        <img src="https://source.unsplash.com/random/1200x400?{{$post[0]->category->name}}" class="card-img-top" alt="{{$post[0]->category->name}}">
    @endif
    
    <div class="card-body text-center">
      <h3 class="card-title"><a href="/post/{{ $post[0]->slug }}" class="text-decoration-none text-dark">{{ $post[0]->title}}</a></h3>
    
      <p>
        <small class="text-muted">By. <a href="/Blog?author={{$post[0]->author->username}}" class="text-decoration-none">{{$post[0]->author->username}}</a> In <a href="/Blog?category={{ $post[0]->category->slug }}" class="text-decoration-none">{{ $post[0]->category->name }}</a> {{ $post[0]->created_at->diffForHumans()}}</p>
     
    </small>
  </p>

    <p class="card-text">{{$post[0]->excerpt}}</p>
    <a href="/post/{{ $post[0]->slug }}" class="text-decoration-none btn btn-primary">Read more...</a>
    </div>
  </div> 

  <div class="container">
    <div class="row">
      @foreach ($post->skip(1) as $posts)
      <div class="col-md-4 mb-3">

        <div class="card">
          <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7)"><a href="/Blog?category={{ $posts->category->slug }}" class="text-white text-decoration-none">{{ $posts->category->name }}</a></div>
              @if($posts->image)
            <img src="{{ asset('storage/'.$posts->image)}}" alt="{{$posts->category->name}}" class="img-fluid mt-3">
            
            @else    
            <img src="https://source.unsplash.com/random/600x400?{{$posts->category->name}}" class="card-img-top mt-3" alt="{{$posts->category->name}}">
        @endif
          
          <div class="card-body">
            <h5 class="card-title">{{$posts->title}}</h5>
            <p>
              <small class="text-muted">By. <a href="/Blog?author={{$posts->author->username}}" class="text-decoration-none">{{$posts->author->username}}</a> {{ $posts->created_at->diffForHumans()}}</p>
           
          </small>
        </p>
            <p class="card-text">{{ $posts->excerpt }}</p>
            <a href="/post/{{ $posts->slug }}" class="btn btn-primary">Read more..</a>
          </div>
        </div>

      </div>
      @endforeach
    </div>
  </div>
     
  @else
  <p class="text-center fs-4">No post found.</p>
  @endif
{{-- 
   @foreach ($post->skip(1) as $posts)
 <article class="mb-5 border-bottom ">
<h2><a href="post/{{ $posts->slug }}" class="text-decoration-none">{{ $posts->title }}</a></h2>
<p>By. <a href="/authors/{{$posts->author->username}}" class="text-decoration-none">{{$posts->author->username}}</a> in <a href="/categories/{{ $posts->category->slug }}" class="text-decoration-none">{{ $posts->category->name }}</a></p>
<p>{{ $posts->excerpt }}</p>

<a href="/post/{{ $posts->slug }}" class="text-decoration-none btn btn-primary">Read more...</a>
</article>
<br>
   @endforeach --}}
   <div class="d-flex justify-content-end">
   {{$post->links()}}
   </div>
@endsection
