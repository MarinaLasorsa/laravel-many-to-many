@extends('layouts.app')

@section('title', 'Create')

@section('content')

    <main>
        <section class="py-5">
            
            <div class="container">
                <h2 class="text-center mb-4">Create a new Type</h2>

                <form action="{{ route('admin.types.store') }}" method="POST">

                    {{-- Cross Site Request Forgering --}}
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Type Name" value="{{old('name')}}">
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