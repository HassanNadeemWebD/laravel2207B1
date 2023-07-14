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
        $data = compact('pageName');
        return view('form')->with($data);
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



    function update()
    {
        $pageName = "Update Info";
        $data = compact('pageName');
        return view('form')->with($data);
    }

}