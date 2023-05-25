@extends('base')
@section('content')
    <form action="{{ route('subjects.update', $subject->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Name</label>
            <input class="form-control" type="text" name="name" value="{{ $subject->name }}">
            @error('name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div>
            <label>Code</label>
            <input class="form-control" type="text" name="code" value="{{ $subject->code }}">
            @error('code')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror

        </div>
        <div>
            <label>pre_requisites</label>
            <input class="form-control" type="text" name="pre_requisites" value="{{ $subject->pre_requisites }}">
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
        </div>

        <button class="btn btn-success mt-4" type="submit">
            Save
        </button>
    </form>
@endsection
