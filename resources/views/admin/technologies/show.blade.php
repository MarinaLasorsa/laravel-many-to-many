@extends('layouts.app')

@section('title', $technology->name)

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{$technology->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$technology->slug}}</h6>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                        <a href="{{route('admin.technologies.edit', $technology)}}" class="btn btn-link card-link">Edit</a>
                    <form action="{{route('admin.technologies.destroy', $technology)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-link card-link" onclick="return confirm('Are you sure you want to delete this technology?')">Delete</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--<div class="container">
    <h4>Related projects:</h4>
    @foreach($project->type->projects as $related_project)
    <h5><a href="{{route('admin.projects.show', $related_project)}}">{{$related_project->title}}</a></h5>
    @endforeach
</div>--}}
@endsection
 