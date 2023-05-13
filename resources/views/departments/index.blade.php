@extends('base')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <h1>
        <a href="{{ route('departments.create') }}">
            Add A New Department
        </a>
    </h1>


    @foreach ($departments as $department)
        <div class="d-flex justify-content-between">
            <div>
                <a href="{{ route('departments.show', $department->id) }}">
                    {{ $department->name }}
                </a>
            </div>

            <div>
                <a href="{{ route('departments.edit', $department->id) }}">
                    Edit
                </a>

                <form action="{{ route('departments.destroy', $department->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-link">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
