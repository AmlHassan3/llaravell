@include('header')
@extends('base')
@section('content')
    <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Name</label>
            <input class="form-control" type="text" name="name" value="{{$doctor->name}}" >

            @error('name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror

        </div>

        <div>
            <label>Password</label>
            <input class="form-control" type="password" name="password" value="{{$doctor->password}}">

            @error('password')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror

        </div>

        <label>Email</label>
        <input class="form-control" type="text" name="email" value="{{$doctor->email}}">

        @error('email')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror

        <button class="btn btn-success mt-4" type="submit">
            Save
        </button>
    </form>  
        <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-success mt-4">
            Delete
        </button>
        </form>
@endsection
