@extends('base')
@section('content')
    <h1>
        {{ $doctor->name }}
    </h1>

    <h3>
        {{ $doctor->email }}
    </h3>
@endsection
