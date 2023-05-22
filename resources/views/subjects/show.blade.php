@extends('base')
@section('content')
    <h1>
        {{ $subject->name }}
    </h1>

    {{ $subject->code }}



    <h3>
        {{ $subject->department->name }}
    </h3>
@endsection
