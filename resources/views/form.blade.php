<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>{{ $pageName }}</title>
</head>

<body class="container">
    <h1>{{ $pageName }}</h1>
{{-- @php
    print_r($errors);
@endphp --}}

    <form action="{{url('/')}}/register"  method="post" >
        <!-- 2 column grid layout with text inputs for the first and last names -->
        {{-- Cross-Site Request Forgery --}}
        @csrf  
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form3Example1"  name="fname" class="form-control" value="{{old('fname')}}" />
                    <label class="form-label" for="form3Example1">First name</label>
                @error('fname')
                
                <span class="text-danger" > {{$message}} </span>
                @enderror
                </div>

            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form3Example2" name="lname" class="form-control" />
                    <label class="form-label" for="form3Example2">Last name</label>
                </div>
                @error('lname')
                
                <span class="text-danger" > {{$message}} </span>
                @enderror
            </div>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" id="form3Example3" name="email" class="form-control" />
            <label class="form-label" for="form3Example3">Email address</label>
            @error('email')
                
            <span class="text-danger" > {{$message}} </span>
            @enderror
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" id="form3Example4" name="password" class="form-control" />
            <label class="form-label" for="form3Example4">Password</label>
            @error('password')
                
            <span class="text-danger" > {{$message}} </span>
            @enderror
        </div>
        <div class="form-outline mb-4">
            <input type="password" id="form3Example4" name="password_confirmation" class="form-control" />
            <label class="form-label" for="form3Example4">Confirm Password</label>
            @error('password_confirmation')
                
            <span class="text-danger" > {{$message}} </span>
            @enderror
        </div>

        <!-- Checkbox -->
        {{-- <div class="form-check d-flex justify-content-center mb-4">
            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
            <label class="form-check-label" for="form2Example33">
                Subscribe to our newsletter
            </label>
        </div> --}}

        <!-- Submit button -->
        <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Sign up</button>

        <!-- Register buttons -->
        {{-- <div class="text-center">
            <p>or sign up with:</p>
            <button type="button" class="btn btn-secondary btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-secondary btn-floating mx-1">
                <i class="fab fa-google"></i>
            </button>

            <button type="button" class="btn btn-secondary btn-floating mx-1">
                <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-secondary btn-floating mx-1">
                <i class="fab fa-github"></i>
            </button> --}}
        </div>
    </form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" ></script>
</html>
