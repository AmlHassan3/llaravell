@extends('base')
@section('content')
    <h1>
        {{"Name :". $student->username }}
    </h1> 

    <h3>
        {{"Code :" . $student->academic_number }}
    </h3>
    <h3>
        {{"Subject :". $student->subject->name }}
    </h3>
@endsection