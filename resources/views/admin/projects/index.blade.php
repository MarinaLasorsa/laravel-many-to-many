@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<div class="container">
  <div class="row justify-content-center align-items-center">
    <div class="col">
      <h1 class="text-end p-3">My Projects</h1>
    </div>
    <div class="col">
      <a href="{{route('admin.projects.create')}}" class="btn btn-primary">Create a new Project</a>
    </div>
  </div>
  
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Type</th>
        <th scope="col">Github Link</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($projects as $project )
      <tr>
        <th scope="row"><a href="{{route('admin.projects.show', $project)}}">{{$project->title}}</a></th>
        <td>{{$project->type ? $project->type->name : "none"}}</td>
        <td><a href="{{$project->url}}">Link</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection
 