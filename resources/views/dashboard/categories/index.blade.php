@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Category</h1>

</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">{{ session('success')}}</div>
@endif

    <div class="table-responsive col-lg-8">
      <a href="/dashboard/categories/create" class="btn btn-primary mb-4">Create new category</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Category Name </th>
            
            </tr>
          </thead>
          <tbody>
              @foreach($categories as $category)
            <tr>
              <td>{{ $loop->iteration}}</td>
              <td>{{ $category->name}}</td>
              <td>
                  <a href="/dashboard/categories/{{$category->slug}}" class="badge bg-info"><span data-feather="eye"></span></a>
                  <a href="/dashboard/categories/{{$category->slug}}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                  
                  <form action="/dashboard/categories/{{$category->slug}}" method="POST" class="d-inline"> 
                 
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