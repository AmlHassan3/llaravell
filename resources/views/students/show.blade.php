@extends('base')
@section('content')
    <h1>
        {{ $student->username }}
    </h1>

    <h3>
        {{ $student->academic_number }}
    </h3>
@endsection