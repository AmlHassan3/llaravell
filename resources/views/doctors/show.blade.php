@extends('base')
@section('content')
    <h1>
        {{ $doctor->name }}
    </h1>

    <h3>
        {{ $doctor->email }}
    </h3>

    <a href="/subjects" style="background-color:#0b4482;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 30px 2px;
        cursor: pointer;
        border-radius: 5px;">
     All subjects
</a>
    
@endsection
