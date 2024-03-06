@extends('shared/_Layout')
@section('title' , 'Create Post')


@section('content')
<div class="container m-5 w-50 p-5">
    <h3 class="text-align-center"> Update Exist Post  </h3>
    <form method="post" action="{{route('update', $post['id'])}}" >
        <input name="_method" type="hidden" value="patch">
    @csrf
    @method('patch')

    <input type="text" name="title" class="form-control mt-3" value="{{$post->title }}" placeholder="Post Title">

    <textarea name="description" id=""  class="form-control mt-3 w-100"  placeholder="Enter Post Description" >{{$post->description}} </textarea>

    <!-- <input type="date" class="form-control mt-3 " > -->

    <input type="submit" class="btn btn-success mt-3">

</form>
</div>
@endsection

