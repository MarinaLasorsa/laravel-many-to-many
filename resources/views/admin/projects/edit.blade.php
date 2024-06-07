@extends('layouts.app')

@section('title', 'Edit')

@section('content')

    <main>
        <section class="py-5">
            
            <div class="container">
                <h2 class="text-center mb-4">Edit Project</h2>

                <form action="{{ route('admin.projects.update', $project) }}" method="POST">

                    {{-- Cross Site Request Forgering --}}
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Project Title" value="{{old('title', $project->title)}}">
                    </div>

                    <div class="mb-3">
                        <label for="type_id" class="form-label">Type</label>
                        <select class="form-control" name="type_id" id="type_id">
                            <option value="">-- Select Type --</option>
                            @foreach($types as $type)
                            <option @selected($type->id == old('type_id', $project->type_id)) value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control" id="slug" placeholder="Project Slug" value="{{old('slug', $project->slug)}}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Project Description" >{{old('description', $project->description)}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="url" class="form-label">URL</label>
                        <input type="url" name="url" class="form-control" id="url" placeholder="Project URL in Github" value="{{old('url', $project->url)}}">
                    </div>

                    <button class="btn btn-primary">Save</button>
                </form>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error )

                            <li>
                                {{$error}}
                            </li>
                                
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </section>
    </main>

@endsection