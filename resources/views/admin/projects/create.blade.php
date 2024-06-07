@extends('layouts.app')

@section('title', 'Create')

@section('content')

    <main>
        <section class="py-5">
            
            <div class="container">
                <h2 class="text-center mb-4">Create a new Project</h2>

                <form action="{{ route('admin.projects.store') }}" method="POST">

                    {{-- Cross Site Request Forgering --}}
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Project Title" value="{{old('title')}}">
                    </div>

                    <div class="mb-3">
                        <label for="type_id" class="form-label">Type</label>
                        <select class="form-control" name="type_id" id="type_id">
                            <option value="">-- Select Type --</option>
                            @foreach($types as $type)
                            <option @selected($type->id == old('category_id')) value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Project Description" >{{old('description')}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="url" class="form-label">URL</label>
                        <input type="url" name="url" class="form-control" id="url" placeholder="Project URL in Github" value="{{old('url')}}">
                    </div>

                    <button class="btn btn-primary">Create</button>
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