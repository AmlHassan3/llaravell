@include('header')
@extends('base')
@section('content')
    <form action="/doctors" method="POST">
        @csrf
        <div>
            <label>Name</label>
            <input class="form-control" type="text" name="name" value="{{ old('name') }}">

            @error('name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label>Password</label>
            <input class="form-control" type="password" name="password" >

            @error('password')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label>Email</label>
            <input class="form-control" type="text" name="email" value="{{ old('email') }}">
            
            @error('email')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button class="btn btn-success mt-4" type="submit">
            Save
        </button>
    </form>
@endsection
