<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about.php', function () {
    return "This is the first about page.";

});
Route::get('/resources.php', function () {
    return "This is the first resource page.";
});
Route::get('/students','StudentsController@index');

//Route::get('/students', function (){ 
	//$students = \App\Student::where('first_name','=','Jin')->get();
	//return $students;
	//$student= new App\Student();
	//$student->first_name='Varaly';
	//$student->last_name='Cario';
	//$student->save();
   //$students=\App\Student::all();
    //return view('students',['students'=>$students]);
    


//});