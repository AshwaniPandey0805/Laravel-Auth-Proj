@extends('layout')
@section('title', 'Add More User')
@section('content')
    <style>
        .container {
            margin-top: 30px;
        }
        form {
            max-width: 500px;
            padding: 35px;
            border: 4px solid white;
            border-radius: 10px;
            box-shadow: 0 0 50px rgba(0, 0, 0, 0.8); 
        }
        /* .redirect-signin {
            text-align: right;
            margin-top: 10px;
        } */
        .sign-in {
            color: red;
            font-weight: 600;
        }
        #main-container {
        display: flex;
        justify-content: center; /* Center content horizontally */
        /* align-items: center; Center content vertically */
        flex-direction: row; /* Arrange items in a column */
        /* Add any other flexbox properties as needed */
    }
    .custom-img {
        width: 300px;
        height: auto;
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

        .error {
            color: firebrick;
            font-weight: bold;
            display: none; /* Hide error messages initially */
        }

        .error-active {
            display: block; /* Show error message when active */
        }
    </style>
    <div id="main-container" class="container">
        {{-- <div class="row">
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                <h1>Welcome to Our Website</h1>
                <p>This is a sample page with some content.</p>
                
                <img src="https://akm-img-a-in.tosshub.com/businesstoday/images/story/202112/tech-sixteen_nine.jpg?size=948:533" class="img-fluid mt-3 mr-4 custom-img" alt="Sample Image">

                <div class="mt-4">
                    <h3>Advertisement</h3>
                    <p>Here is an advertisement for our product/service.</p>
                    <!-- Replace the below link with your actual ad image URL -->
                    <img src="https://via.placeholder.com/400x200" class="img-fluid" alt="Advertisement">
                </div>
            </div> --}}

            
    
            <div class="col-md-6">
                <form action="{{ route('addMoreUser.post') }}" method="post" id="myForm" enctype="multipart/form-data"> 
                    <h1 style="text-align: center; margin-bottom:20px">Register User</h1>
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-6">
                            {{-- first Name --}}
                            <div class="mb-3">
                                <label for="firstName" class="form-label">First Name:</label>
                                <input type="text" class="form-control" id="firstName" name="firstName">
                                <small class="error" id="firstNameError">First name is required.</small>
                            </div>
                            
                            {{-- email --}}
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email">
                                <small class="error" id="emailError">Email is required.</small>
                            </div>
                            
                            {{-- password --}}
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                                <small class="error" id="passwordError">Password is required.</small>
                            </div>
                        </div>

                        {{-- lastname --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Last Name:</label>
                                <input type="text" class="form-control" id="lastName" name="lastName">
                                <small class="error" id="lastNameError">Last name is required.</small>
                            </div>

                            {{-- phone Number --}}
                            <div class="mb-3">
                                <label for="phoneNumber" class="form-label">Phone Number:</label>
                                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber">
                                <small class="error" id="phoneNumberError">Please enter a valid phone number.</small>
                            </div>

                            {{-- confirme Password --}}
                            <div class="mb-3">
                                <label for="cpassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="cpassword" name="cpassword">
                                <small class="error" id="cpasswordError">Confirm password is required.</small>
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <input type="text" class="form-control" id="role" name="role">
                                <small class="error" id="roleError">Last name is required.</small>
                                
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="mb-3">
                                <label for="imageUpload" class="form-label">Upload Image</label>
                                <input type="file" id="imageUpload" accept="image/*" class="form-control" name="imageUpload">
                                <small class="error" >Show Error</small>
                            </div>
                            
                        </div> --}}
                    </div>
        
                    <button type="submit" class="btn btn-primary btn-block">SIGN UP</button>
                    <div class="redirect-signin">
                        <small>Already have an account? </small>
                        <a href="{{ route('login') }}" class="sign-in">SIGN IN</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Script file --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

        // $(document).ready(function() {
           
        // });

        $(document).ready(function() {
            $('#myForm').on('submit', function(event) {
                event.preventDefault(); // Prevent form submission

                // Validate each field
                validateField('#firstName', '#firstNameError');
                validateField('#email', '#emailError');
                validateField('#password', '#passwordError');
                validateField('#lastName', '#lastNameError');
                validateField('#phoneNumber', '#phoneNumberError');
                validateField('#cpassword', '#cpasswordError');
                validateField('#role', '#roleError');

                // Perform form submission if all fields are valid
                if ($('#myForm .error-active').length === 0) {
                    this.submit();
                }
            });

            // Input validation
            $('#firstName').on('input', function(event){
                validateField('#firstName', '#firstNameError');
            })
            // Input validation
            $('#role').on('input', function(event){
                validateField('#role', '#role');
            })

            $('#email').on('input', function(event){
                // validateField('#email', '#emailError');
                validateEmail();
                
            })
            $('#password').on('input', function(event){
                // validateField('#password', '#passwordError');
                validatePassword()
                
            })
            $('#lastName').on('input', function(event){
                validateField('#lastName', '#lastNameError');
            })
            $('#phoneNumber').on('input', function(event){
                validateField('#phoneNumber', '#phoneNumberError');
                validatePhoneNumber();
            })
            $('#cpassword').on('input', function(event){
                // validateField('#cpassword', '#cpasswordError');
                validateConfirmPassword();
            })



            

            // Function to validate a field
            function validateField(fieldId, errorId) {
                var fieldValue = $(fieldId).val().trim();
                var errorElement = $(errorId);

                if (fieldValue === '') {
                    errorElement.addClass('error-active'); // Show error message
                } else {
                    errorElement.removeClass('error-active'); // Hide error message
                }
            }
        });
        
        // Function to validate email field
        function validateEmail() {
                var emailValue = $('#email').val().trim();
                var emailErrorElement = $('#emailError');

                // Regular expression for email validation
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                if (emailValue === '') {
                    emailErrorElement.addClass('error-active').text('Email is required.'); // Show error message
                } else if (!emailRegex.test(emailValue)) {
                    emailErrorElement.addClass('error-active').text('Please enter a valid email address.'); // Show error message
                } else {
                    emailErrorElement.removeClass('error-active').text(''); // Hide error message
                }
            }

             // Function to validate phone number field
             function validatePhoneNumber() {
                var phoneNumberValue = $('#phoneNumber').val().trim();
                var phoneNumberErrorElement = $('#phoneNumberError');

                // Regular expression for phone number validation
                var phoneNumberRegex = /^\d{10}$/;

                // Check if the input contains any alphabetic characters (a-z)
                if (/[a-z]/i.test(phoneNumberValue)) {
                    phoneNumberErrorElement.addClass('error-active').text('Phone number should contain only numeric characters.'); // Show error message
                } else if (phoneNumberValue === '') {
                    phoneNumberErrorElement.addClass('error-active').text('Phone number is required.'); // Show error message
                } else if (phoneNumberValue.length !== 10 || !/^\d+$/.test(phoneNumberValue)) {
                    phoneNumberErrorElement.addClass('error-active').text('Please enter a valid 10-digit phone number.'); // Show error message
                } else {
                    phoneNumberErrorElement.removeClass('error-active').text(''); // Hide error message
                }
            }


            // Function to validate password field
            function validatePassword() {
                var passwordValue = $('#password').val().trim();
                var passwordErrorElement = $('#passwordError');

                // Regular expressions for password validation
                var uppercaseRegex = /[A-Z]/;
                var lowercaseRegex = /[a-z]/;
                var numberRegex = /[0-9]/;
                var specialCharRegex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;

                // Check if the password meets the criteria for a strong password
                if (passwordValue.length < 8 || !uppercaseRegex.test(passwordValue) || !lowercaseRegex.test(passwordValue) || !numberRegex.test(passwordValue) || !specialCharRegex.test(passwordValue)) {
                    passwordErrorElement.addClass('error-active').text('Password should be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character.'); // Show error message
                } else {
                    passwordErrorElement.removeClass('error-active').text(''); // Hide error message
                }
            }
            // Function to validate password field
            function validateConfirmPassword() {
                var passwordValue = $('#cpassword').val().trim();
                var passwordErrorElement = $('#cpasswordError');

                // Regular expressions for password validation
                var uppercaseRegex = /[A-Z]/;
                var lowercaseRegex = /[a-z]/;
                var numberRegex = /[0-9]/;
                var specialCharRegex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;

                // Check if the password meets the criteria for a strong password
                if (passwordValue.length < 8 || !uppercaseRegex.test(passwordValue) || !lowercaseRegex.test(passwordValue) || !numberRegex.test(passwordValue) || !specialCharRegex.test(passwordValue)) {
                    passwordErrorElement.addClass('error-active').text('Password should be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character.'); // Show error message
                } else {
                    passwordErrorElement.removeClass('error-active').text(''); // Hide error message
                }
            }



    </script>
@endsection
