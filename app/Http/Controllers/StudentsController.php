<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudentsController extends Controller
{
    
 function index()
 {
    return"success";

    //$students = \App\Student::where('first_name','=','Jin')->get();
    //return $students;
    //$student= new App\Student();
    //$student->first_name='Varaly';
    //$student->last_name='Cario';
    //$student->save();
     $students=\App\Student::all();
    return view('students',['students'=>$students]);
    

 }   
}
