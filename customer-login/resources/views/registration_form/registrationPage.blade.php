@extends('layout')
@section('title', 'Registration Form')
@section('content')
<div class="container">
    <div class="row mt-5">
        <!-- Form Column -->
        <div class="col-md-4">
            <h1>Student ERP</h1>

            <form action="./view/show_Subjects.php" method="post" class="needs-validation" novalidate>

                <div class="form-group mt-2">
                    <label for="name">University Roll No.</label>
                    <input type="text" class="form-control mt-1" id="URN" name="unr" >
                    <div class="invalid-feedback">Please enter a student name.</div>
                </div>

                <div class="form-group mt-2">
                    <label for="name">Student Name:</label>
                    <input type="text" class="form-control mt-1" id="name" name="name" value="{{auth()->user()->name}}" >
                    <div class="invalid-feedback">Please enter a student name.</div>
                </div>

                <div class="form-group mt-2">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control mt-1" id="email" name="email" value="{{auth()->user()->email}}">
                    <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>

                <div class="form-group mt-2">
                    <label for="branch">Branch:</label>
                    <input type="text" class="form-control mt-1" id="branch" name="branch" required>
                    <div class="invalid-feedback">Please enter a branch.</div>
                </div>

                <div class="form-group mt-2">
                    <label for="stream">Stream:</label>
                    <select class="form-control mt-1" id="stream" name="stream" >
                        <option value="">Select Stream</option>
                        <option value="Computer_Science">Computer Science</option>
                        <option value="Information Technology">Information Technology</option>
                        <option value="Electronic Engineering">Electronic Engineering</option>
                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                        <option value="Aerospace Engineering">Aerospace Engineering</option>
                        <option value="Chemical Engineering">Chemical Engineering</option>
                    </select>

                    <div class="invalid-feedback">Please select a stream.</div>

                </div>

            </form>
        </div>
        <!-- Table Column -->
        <div class="col-md-8 ">

            <h1 class="text-center bold" >Select Subject</h1>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Subject Name</th>
                        <th>Subject Code</th>
                        <th>Select</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mathematics-I</td>
                        <td>MA101</td>
                        <td><input type="checkbox" class="form-check-input" name="subjects[]" value="MA101"></td>
                    </tr>
                    <tr>
                        <td>Engineering Physics</td>
                        <td>PH101</td>
                        <td><input type="checkbox" class="form-check-input" name="subjects[]" value="PH101"></td>
                    </tr>
                    <!-- Add more rows for other subjects -->
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Include jQuery library from CDN -->



@endsection