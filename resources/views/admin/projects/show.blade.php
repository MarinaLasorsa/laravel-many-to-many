@extends('layouts.app')

@section('title', $project->title)

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{$project->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$project->type ? $project->type->name : "no type"}}</h6>
                </div>
                <div class="card-body">
                    <p class="card-text">{{$project->description}}</p>
                    <div class="d-flex">
                        <a href="{{route('admin.projects.edit', $project)}}" class="btn btn-link card-link">Edit</a>
                    <form action="{{route('admin.projects.destroy', $project)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-link card-link" onclick="return confirm('Are you sure you want to delete this project?')">Delete</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if ($project->type)
<div class="container">
    <h4>Related projects:</h4>
    @foreach($project->type->projects as $related_project)
    <h5><a href="{{route('admin.projects.show', $related_project)}}">{{$related_project->title}}</a></h5>
    @endforeach
</div>
@endif
@endsection
 