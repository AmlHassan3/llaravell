@extends('base')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <h1>
        <a href="{{ route('students.create') }}">
            Add A New Student
        </a>
    </h1>

    @foreach ($students as $studInformation)
        <div class="d-flex justify-content-between">
            <div>
                <a href="{{ route('students.show', $studInformation->id) }}">
                    {{ $studInformation->username  }}
                </a>
            </div>

            <div>
                <a href="{{ route('students.edit', $studInformation->id) }}">
                    Edit
                </a> 
                
            </div>
        </div>
    @endforeach

    <!-- only subjects-->
        {{ $students->links() }}
@endsection
