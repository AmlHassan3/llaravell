<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctorsData = Doctor::paginate(5);
        return view('doctors.index' , ['doctors' =>  $doctorsData ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.create');
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
            'name' => 'required' ,
            'password' => ['required', 'string', 'min:8'],
            'email' => ['required' ,'string' ,'email'  ] 
        ]);
        Doctor::create($formFields);
    
        return Redirect::route('doctors.index')->with('status','A New Doctor Added Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        return view ('doctors.show' , ['doctor' => $doctor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        return view ('doctors.edit', ['doctor' => $doctor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Doctor $doctor)
    {
        $formFields = $request ->validate([
            'name' => 'required' ,
            'password' => ['required', 'string', 'min:8'] ,
            'email' => ['required' ,'string' ,'email' ]
        ]);
        $doctor->update($formFields);
        
        return Redirect::route('doctors.show' , $doctor->id)->with('status','Changes had done Succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return Redirect::route('doctors.index')->with('status','Deleting A Doctor had done Succesfully!');
    }
}
