@include('header')
@extends('base')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <h1>
        <a href="{{ route('subjects.create') }}">
            Add A New Subject
        </a>
    </h1>


    @foreach ($subjects as $subject)
        <div class="d-flex justify-content-between">
            <div>
                <a href="{{ route('subjects.show', $subject->id) }}">
                    {{ $subject->name }}
                </a>
            </div>

            <div>
                <a href="{{ route('subjects.edit', $subject->id) }}">
                    Edit
                </a>

                <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-link">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    @endforeach

    <!-- only subjects-->
    {{ $subjects->links() }}
@endsection