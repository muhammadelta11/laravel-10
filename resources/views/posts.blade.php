@extends('layouts.main')
@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
           
                <br>
            <center><h1 class="mb-3">{{$posts->title}}</h1></center>
            <br>
            
            @if($posts->image)
        <center><div style="max-height: 500px; overflow:hidden;">
        <img src="{{ asset('storage/'.$posts->image)}}" alt="{{$posts->category->name}}" class="img-fluid mt-3">
</div></center>
        @else    
    <img src="https://source.unsplash.com/user/erondu/1200x400?{{$posts->category->name}}" alt="{{$posts->category->name}}" class="img-fluid mt-3">
    @endif
    <center><p>By. <a href="/Blog?author={{$posts->author->username}}" class="text-decoration-none">{{$posts->author->name}}</a> in <a href="/Blog?category={{ $posts->category->slug }}" class="text-decoration-none">{{ $posts->category->name }}</a></p></center>
    <br>
    

    <article class="fs-4">
    {!!$posts->body!!}
</article>
<br>
<a href="/Blog" class="text-decoration-none btn btn-primary">back to posts</a>

        </div>
       </div>
</div>
@endsection

<!-- {{-- Post::create([
    'title'=>'Judul Ke tiga',
    'slug'=>'Judul Ke tiga',
    'excerpt'=> 'lorem ipsum Ke tiga',
    'body'=> '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti nemo quia impedit cumque ad aliquam aut laborum, cum dolorum ipsam dolorem saepe doloribus earum a natus voluptate illum perferendis? Omnis quae ipsum amet unde vitae. Facere excepturi, magni eaque possimus officia dolor ea, beatae rem enim at commodi voluptates vero? Ipsam ratione nulla</p><p> adipisci officia aut magni deserunt, inventore doloribus, cum id alias distinctio. Quibusdam voluptatibus vero laudantium accusantium autem consequuntur placeat dolor iste commodi tenetur nesciunt nemo minus, perferendis iure ut.</p> <p>Non quas hic qui sit blanditiis nihil voluptatibus illum, quidem dolore soluta, ipsa temporibus nemo aliquam vitae omnis suscipit? Quisquam optio voluptates, sit eveniet</p> <p> aliquid eius debitis provident dolorum harum quam suscipit iusto autem laborum, eum, dolorem eaque facilis veritatis! Quidem voluptates mollitia, error saepe inventore corporis ducimus aliquam alias, tempore temporibus quis rerum soluta dignissimos id, aperiam sequi! Nemo accusantium consequuntur quidem possimus aperiam magnam vel officia!</p>'
]) --}} -->

