@extends('layouts.app')

@section('title', 'Types')

@section('content')
<div class="container">
  <div class="row justify-content-center align-items-center">
    <div class="col">
      <h1 class="text-end p-3">Project Types</h1>
    </div>
    <div class="col">
      <a href="{{route('admin.types.create')}}" class="btn btn-primary">Create a new Type</a>
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
    @foreach ($types as $type)
      <tr>
        <th scope="row"><a href="{{route('admin.types.show', $type)}}">{{$type->name}}</a></th>
        <td>{{$type->slug}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection
 