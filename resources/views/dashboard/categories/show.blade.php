@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-lg-8">
          
            <h1 class="mb-3">{{$category->slug}}</h1>
            <a href="/dashboard/post" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my posts</a>
            <a href="/dashboard/post/{{$posts->slug}}/edit" class="btn btn-warning"><span data-feather="arrow-left"></span> Edit</a>
            <form action="/dashboard/post/{{$posts->slug}}" method="post" class="d-inline">
            @csrf
             @method('delete')
                    <button class="btn btn-danger" onclick="return confirm('are you yakin?')" type="submit"><span data-feather="x-circle"></span>Delete</button>
                    
</form>
        @if($categories->slug)
        <div style="max-height: 350px; overflow:hidden;">
        <img src="{{ asset('storage/'.$category->image)}}" alt="{{$category->slug}}" class="img-fluid mt-3">
</div>
        @else    
    <img src="https://source.unsplash.com/user/erondu/1200x400?{{$category->slug}}" alt="{{$category->slug}}" class="img-fluid mt-3">
    @endif
<hr>
    <article class="fs-5">
    {!!$category->slug->body!!}
</article>
<br>


        </div>
       </div>
</div>
    
@endsection