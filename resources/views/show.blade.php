<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Students Record</title>

</head>

<body>

    {{-- <pre>
@php
    print_r($students->toArray());
    print_r($students[2]['firstName']);
    print_r($students);
@endphp --}}

    </pre>

    <h1 class="container ">Students Record</h1>
    <br>
    <table class="table table-striped container">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Update/Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student['studentID'] }}</td>
                    <td>{{ $student['firstName'] }}</td>
                    <td>{{ $student['lastName'] }}</td>
                    <td>{{ $student['email'] }}</td>
                    <td>{{ $student['password'] }}</td>
                    <td> <a href="/edit/{{ $student['studentID'] }}"> <button class="btn btn-primary">Edit</button> </a> 
                    
                        <a href="/delete/{{ $student['studentID'] }}"> <button class="btn btn-danger">Delete</button> </a>  </td>

                </tr>
            @endforeach

        </tbody>
    </table>





</body>

</html>
