<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;


// Basic Controller
class RegisterationController extends Controller
{

    function form()
    {
        $pageName = "Registration";
        $action = "/register";
        $btn = 'register';
        $data = compact('pageName','action','btn');

        return view('form')->with($data );
    }

    function createRecord(Request $request)
    {

        $request->validate([
            'fname' => 'required' , 
            'lname' => 'required' ,                             
            'email' => 'required' , 
            'password' => 'required' , 
            'password_confirmation' => 'same:password' , 
        
        
        ]);

       $student =  new Students();
       $student->firstName = $request['fname'];
       $student->lastName = $request['lname'];
       $student->email = $request['email'];
       $student->password = $request['password'];
       $student->save();
       


        echo "Record Created";
        echo "<pre>";
        // print_r($student);
// print_r($request->all());
// echo $request['fname'];

  }

  function show(){
$data = Students::all();
$students = $data->toArray();
// print_r($student->toArray());
return view('show' , compact('students') );




  }

  function edit($id){

    $find = Students::find($id);
$student =  $find->toArray();
$pageName = "Edit Info";
$action = "/update/$id";
$btn = "Update";

// $action =  $action."/$id";
    // print_r($student->toArray());

    return view('form' , compact('student' , 'pageName', 'action','btn'));


// echo $id;

  }



    function update(Request $request,$id)
    {
        $student = Students::find($id);
        $student->firstName = $request['fname'];
        $student->lastName = $request['lname'];
        $student->email = $request['email'];
        $student->password = $request['password'];
        $student->save();

        return redirect('/');
        // $pageName = "Update Info";
        // $data = compact('pageName');
        // return view('form')->with($data);
    }

function delete($id){

    $student = Students::find($id);
    $student->delete();
    return redirect('/');



}

}