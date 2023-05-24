@include('header')
@extends('base')
@section('content')
    <form action="/students" method="POST">
        @csrf
        <div>
            <label>username</label>
            <input class="form-control" type="text" name="username" value="{{ old('username') }}">

            @error('username')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label>password</label>
            <input class="form-control" type="password" name="password" >

            @error('password')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label>academic number</label>
            <input class="form-control" type="text" name="academic_number" value="{{ old('academic_number') }}">
            
            @error('academic_number')
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
