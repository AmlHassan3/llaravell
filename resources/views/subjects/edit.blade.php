@extends('base')
@section('content')
    <form action="{{ route('subjects.update', $subject->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Name</label>
            <input class="form-control" type="text" name="name" value="{{ $subject->name }}">
        </div>

        <div>
            <label>Code</label>
            <input class="form-control" type="text" name="code" value="{{ $subject->code }}">
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
