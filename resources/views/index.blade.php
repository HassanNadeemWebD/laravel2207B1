<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$pageName}}</title>
</head>
<body>
@php
    // $naam = "<h1> Ali Ahmed </h1>";
$age = 10;
print_r($arr[0]);

@endphp


<h1>Index on / Route </h1>
<h1>{{$naam}}</h1>
{{$naam}}
{!! $naam !!}
<a href="/welcome">Welcome</a>


{{-- @for ($i =1;  $i <= 100; $i++)
<br/>      
{{$i}}

@endfor --}}
    
{{-- @while ()
    
@endwhile --}}

@if ($age == 18)

{{"age is equal to 18"}}
@elseif($age == 17)

{{"age is equal to 17"}}

@else
{{"age is incorrect"}}
@endif

</body>
</html>