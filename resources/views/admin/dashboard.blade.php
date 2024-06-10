@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="row py-3">
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                  Projects
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><a href="{{route('admin.projects.index')}}" class="btn-link">See all projects</a></li>
                  <li class="list-group-item"><a href="{{route('admin.projects.create')}}" class="btn-link">Create a project</a></li>
                </ul>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                  Types
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><a href="{{route('admin.types.index')}}" class="btn-link">See all types</a></li>
                  <li class="list-group-item"><a href="{{route('admin.types.create')}}" class="btn-link">Create a type</a></li>
                </ul>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                  Technologies
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><a href="{{route('admin.technologies.index')}}" class="btn-link">See all technologies</a></li>
                  <li class="list-group-item"><a href="{{route('admin.technologies.create')}}" class="btn-link">Create a technology</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
