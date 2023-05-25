<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentsData = Student::paginate(10);
        return view('students.index' , ['students' => $studentsData]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $formFields = $request ->validate([
            'username' => 'required' ,
            'password' => ['required', 'string', 'min:8'],
            'academic_number' => ['required', 'ends_with:@menofia.edu.eg'],
            'subject_id' =>'nullable'
        ]);
        Student::create($formFields);
    
        return Redirect::route('students.index')->with('status','A New Student Added Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
       $student = Student::where('id' ,'=', $id )->with('subject')->first();
        return view ('students.show' , ['student' => $student]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view ('students.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function register_subject(string $id)
    {

        $student = ['subject_id' => $id]; 
        $student->update();
        return Redirect::route('students.show' , $student->id);
    }

    public function update(Request $request,Student $student)
    {
        $formFields = $request ->validate([
            'username' => 'required' ,
            'password' => ['required', 'string', 'min:8'] ,
            'academic_number' => ['required', 'ends_with:@menofia.edu.eg',
            'stubject_id' =>'nullable'
            ]
        ]);
        $student->update($formFields);
        
        return Redirect::route('students.show' , $student->id)->with('status','Changes had done Succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return Redirect::route('students.index')->with('status','Deleting A Student had done Succesfully!');
    }
}
