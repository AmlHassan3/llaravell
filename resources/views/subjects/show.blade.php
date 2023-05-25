@extends('base')
@section('content')
    <form action="" method="POST">
    <h1>
        {{"Subject Name : " . $subject->name }}
    </h1>

    {{ "Subject Code : ". $subject->code }}

    <h3>
        {{ "Subject Department : ". $subject->department->name }}
    </h3>
    <h3>
        {{ "Pervious Requirement : ". $subject->pre_requisites }}
    </h3>
    
        @csrf
        <button type="submit" class="btn btn-primary">Register Subject</button>
    </form>
    <button class="btn btn-success mt-4" type="submit">
        Delete Subject
    </button>
    
@endsection
