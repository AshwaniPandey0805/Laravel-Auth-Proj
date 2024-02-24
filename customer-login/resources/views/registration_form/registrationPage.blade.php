@extends('layout')
@section('title', 'Registration Form')

@section('content')

<style>
    /* Custom styles */
    body {
        font-family: Arial, sans-serif;
        /* background: #fff */
    }
    .navbar {
        background-color: #333;
        color: #fff;
    }
    .navbar-brand {
        font-weight: bold;
    }
    .admin-image {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 10px;
    }
    .admin-info {
        display: flex;
        align-items: center;
    }
    .container {
        margin-top: 20px;
    }
</style>


  <!-- Navbar -->
  
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <div class="admin-info">
            <img src="" alt="Admin Image" class="admin-image">
            {{-- <p>{{$user->_image}}</p> --}}
            <span>Ashwani Pandey</span>
        </div>
    </div>
</nav>


<!-- Content -->
<div class="container">
    <h2>Welcome to the Admin Dashboard</h2>
    <p>This is a simple admin dashboard layout.</p>
    
    <!-- Additional content -->
    <div class="row">
        <div class="col-md-6">
            <h3>Recent Posts</h3>
            <ul>
                <li>Post 1</li>
                <li>Post 2</li>
                <li>Post 3</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h3>Recent Users</h3>
            <ul>
                <li>User 1</li>
                <li>User 2</li>
                <li>User 3</li>
            </ul>
        </div>
    </div>
</div>

@endsection