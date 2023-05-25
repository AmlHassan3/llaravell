@extends('base')
@section('content')
    <form action="/subjects" method="POST">
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
            <label>Code</label>
            <input class="form-control" type="text" name="code" value="{{ old('code') }}">

            @error('code')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <div>
            <label>Prerequisites</label>
            <input class="form-control" type="text" name="pre_requisites" value="{{ old('pre_requisites') }}">
            @error('pre_requisites')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
            
        </div>

        <div>
            <label>Department</label>
            <select name="department_id" class="form-select">
                @foreach ($departments as $department)
                    <option value="{{ $department->id }}">
                        {{ $department->name }}
                    </option>
                @endforeach
            </select>

            @error('department_id')
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
