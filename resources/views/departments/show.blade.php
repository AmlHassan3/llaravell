@extends('base')
@section('content')
    <h1>
        {{ $department->name }}
    </h1>

    {{ $department->code }}
@endsection
