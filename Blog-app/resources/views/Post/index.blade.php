@extends('shared/_Layout')
@section('title' , 'blogs')


@section('content')
<div class="container">
   
<a href="{{route('create')}}" class="btn btn-success my-3">Create New Post </a>

    <div class="row row-cols-1 row-cols-md-3 g-4">
    <!-- {{route('create')}} -->
    

        @foreach($posts as $post)
  <div class="col">
    <div class="card h-100">
      <!-- <img src="..." class="card-img-top" alt="..."> -->
      <div class="card-body">
        <h5 class="card-title">{{$post->id}}</h5>
        <h4 class="card-title">{{$post->title}}</h4>
        <p class="card-subtext">{{$post->description}}</p>
        <p class="card-subtext">{{$post->createAt}}</p>

    <div class="d-flex justify-content-between">
   
    <a href="{{route('show', $post['id'])}}" class="btn btn-warning">View</a>
   
    <a href="{{route('edit' , $post['id'])}}" class="btn btn-secondary">Update</a>

    <form method="post" action="{{route('delete', $post -> id)}}" >
        <input name="_method" type="hidden" value="Delete">
    @csrf
    @method('Delete')
    
    <a href="{{route('delete' , $post['id'])}}"  class="btn btn-danger" >Delete</a>
    </form>

    </div>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  
  @endforeach
  
</div>
</div>

@endsection