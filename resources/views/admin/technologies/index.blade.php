@extends('layouts.app')

@section('title', 'Technologies')

@section('content')
<div class="container">
  <div class="row justify-content-center align-items-center">
    <div class="col">
      <h1 class="text-end p-3">Technologies</h1>
    </div>
    <div class="col">
      <a href="{{route('admin.technologies.create')}}" class="btn btn-primary">Create a new Technology</a>
    </div>
  </div>
  
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Slug</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($technologies as $technology)
      <tr>
        <th scope="row"><a href="{{route('admin.technologies.show', $technology)}}">{{$technology->name}}</a></th>
        <td>{{$technology->slug}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection
 