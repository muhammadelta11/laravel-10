@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>
<div class="col-lg-8">

    <form method="post" action="/dashboard/post/{{$posts->slug}}" class="mb-5" enctype="multipart/form-data">
    @method('put')    
    @csrf
        <div class="mb-3">
          <label for="title" class="form-label">title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{old('title',$posts->title)}}"> 
          @error('title')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror         
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{old('slug',$posts->slug)}}"> 
            @error('slug')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror         
          </div>
          <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category_id">
             <!-- <option value="1">Web Desain</option>
             <option value="2">Web Programing</option>
             <option value="3">Personal</option> -->
             @foreach ($category as $categories)
             @if(old('category_id',$posts->category_id) == $categories->id)
             <option value="{{ $categories->id}}" selected>{{$categories->name}}</option>
             @else
             <option value="{{$categories->id}}">{{$categories->name}}</option>
             @endif
             @endforeach
            </select>         
          </div>

          <div class="mb-3">
            <label for="image" class="form-label">Upload Gambar</label>
            <input type="hidden" name="oldImage" value="{{$posts->image}}">
            @if($posts->image)
            <img src="{{asset('storage/'.$posts->image)}}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
            <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif
            
            <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" onchange="previewImage()">
            @error('image')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror    
          </div>

          <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            @error('body')
            <p class="text-danger"> {{$message}}</p>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body',$posts->body)}}">
  <trix-editor input="body"></trix-editor>
                   
          </div>
          
        
        <button type="submit" class="btn btn-primary">Update Post</button>
      </form>
</div>
<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function(){
    fetch('/dashboard/post/checkSlug?title='+ title.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });

   document.addEventListener('trix-file-accept', function(e){
    e.preventDefault();
   })

   function (previewImage){
const image = document.querySelector('#image');
const imgPreview = document.querySelector('.img-preview');
imgPreview.style.display ='block';

const oFReader = new FileReader();
oFReader.readAsDataURL(image.files[0]);

oFReader.onload = function(oFREvent){
  imgPreview.src = oFREvent.target.result;
}
   }
</script>
@endsection