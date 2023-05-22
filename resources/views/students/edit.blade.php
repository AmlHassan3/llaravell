@extends('base')
@section('content')
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Name</label>
            <input class="form-control" type="text" name="username" value="{{$student->username}}" >

            @error('username')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror

        </div>

        <div>
            <label>password</label>
            <input class="form-control" type="password" name="password" value="{{$student->password}}">

            @error('password')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror

        </div>

        <label>academic number</label>
        <input class="form-control" type="text" name="academic_number" value="{{$student->academic_number}}">

        @error('academic_number')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror

        <button class="btn btn-success mt-4" type="submit">
            Save
        </button>
    </form>  
        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-success mt-4">
            Delete
        </button>
        </form>
@endsection