@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Post</h1>

</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">{{ session('success')}}</div>
@endif

    <div class="table-responsive col-lg-8">
      <a href="/dashboard/post/create" class="btn btn-primary mb-4">Create new post</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach($post as $posts)
            <tr>
              <td>{{ $loop->iteration}}</td>
              <td>{{ $posts->title}}</td>
              <td>{{ $posts->category->name}}</td>
              <td>
                  <a href="/dashboard/post/{{$posts->slug}}" class="badge bg-info"><span data-feather="eye"></span></a>
                  <a href="/dashboard/post/{{$posts->slug}}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                  
                  <form action="/dashboard/post/{{$posts->slug}}" method="POST" class="d-inline"> 
                 
                    <button type="submit" class="budge bg-danger border-0" onclick="return confirm('are you yakin ingin menghapus?')"><span data-feather="x-circle"></span></button>
                    @method('delete')
             
             @csrf
                    
               </form>
            </td>
            </tr>
           @endforeach
          </tbody>
        </table>
    
    
@endsection