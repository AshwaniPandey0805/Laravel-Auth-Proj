@extends('layout')
@section('title', 'Register')
@section('content')
    <style>
        /* body{
            display: flex;
            justify-content: center;
            align-items: center;
        } */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
            /* height: 100vh; This ensures the container takes up the full viewport height */
        }
        form {
            width: 500px;
            padding: 35px;
            border: 4px solid white;
            border-radius: 10px;
            box-shadow: 0 0 50px rgba(0, 0, 0, 0.8); 
        }
        .redirect-signin{
            /* display: flex; */
            justify-content: space-between;
            display: block;
            width: 60%;
            margin: auto;
            margin-top: 10px;
            
        }
        small{
            margin-left: 5px;
            font-weight: 600;
        }
        .sign-in{
            text-decoration: none;
            color: red;
            font-size: 15px;
            font-weight: 600;
            float: right;
            margin-right: 10px;
            
        }

        .btn {
            display: block;
            width: 60%;
            margin: auto;
            text-transform: uppercase;
            font-weight: 700;
            font-size: 20px;
        }
    </style>
    <div class="mt-2">
            @if($errors->all())
                <div class="col-12">
                    @foreach($errors->all() as $error )
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
        </div>
    <div class="container">
        

        <!-- action="{{route('register.post')}}"  method="post" -->
        <form action="{{route('register.post')}}"  method="post" id="myForm"> 
        <h1 style="text-align: center; margin-bottom:20px ">Register User</h1>
        @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" name="username">
                <!-- <div id="emailHelp" class="form-text" style="color:white">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email">
                <div id="emailHelp" class="form-text" style="color:white">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" >
            </div>
            <div class="mb-3">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" >
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary" id="submit-btn">SIGN UP</button>
            <div class="redirect-signin">
                <small>Already, have an account !</small>
                <span>
                    <a href="{{ route('login') }}" class="sign-in">
                        SIGN-IN
                    </a>
                </span>
            </div>
        </form>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
            <!-- <script>
                document.getElementById('submit-btn').addEventListener('click', function(event) {
                    event.preventDefault(); //
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "Do you want to submit this form?",
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, submit it!'
                    }).then((result) => {  -->
                        
                        <!-- if (result.isConfirmed) {
                            console.log("Working");
                            // Collect form data
                            var formData = new FormData(document.getElementById('myForm'));
                            // var formData = new FormData(this);
                            for (var pair of formData.entries()) {
                                console.log(pair[0] + ': ' + pair[1]);
                            }
                            
                            // Add CSRF token to the form data
                            formData.append('csrf_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

                            console.log("OR bahi",formData);

                                // Send AJAX request
                                fetch('{{ route("register.post") }}', {
                                    method: 'POST',
                                    body: formData
                                })
                                .then(response => response.json())
                                .then(data => {
                                    // Handle response data
                                    console.log(data);
                                })
                                .catch(error => {
                                    // Handle errors
                                    console.error('Error:', error);
                                });

                            document.getElementById('myForm').addEventListener('submit',  function(event) {
                                //  Prevent the default form submission

                                document.getElementById('myForm').submit();

                                
                          }); -->
                        <!-- } 
                    }); 
                });
            </script> -->
@endsection