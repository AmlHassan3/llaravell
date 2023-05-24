@include('header')
@extends('base')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <h1>
        <a href="{{ route('doctors.create') }}">
            Add A New Doctor
        </a>
    </h1>

    @foreach ($doctors as $doctorInformation)
        <div class="d-flex justify-content-between">
            <div>
                <a href="{{ route('doctors.show', $doctorInformation->id) }}">
                    {{ $doctorInformation->name  }}
                </a>
            </div>

            <div>
                <a href="{{ route('doctors.edit', $doctorInformation->id) }}">
                    Edit
                </a> 
                
            </div>
        </div>
    @endforeach

    <!-- only subjects-->
        {{ $doctors->links() }}
@endsection
