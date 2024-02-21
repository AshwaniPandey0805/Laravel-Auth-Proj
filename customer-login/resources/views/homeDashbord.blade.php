@extends('layout')
@section('title', 'Login')
@section('content')
<style>
  /* body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: rgba(0, 0, 0, 0.68);
  } */
  .container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    color: black;
  }
  h1 {
    text-align: center;
    margin-bottom: 20px;
  }
  p {
    margin-bottom: 10px;
  }
  .dashboard-graphic {
    display: block;
    margin: 0 auto;
    width: 80%;
    max-width: 400px;
  }
  /* .logout-button{ */
    /* display: block; */
    /* width: 50%; */
    /* margin: auto;


  } */
  .logout-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  .logout-button:hover {
    background-color: #0056b3;
  }
</style>


<div class="container">
  <h1>Welcome to Your Dashboard</h1>    
  <p>This is a simple dashboard page.</p>
  <p>You can customize this page with your own content and features.</p>
  <p>For example, you can add:</p>
  <ul>
    <li>Graphs and charts</li>
    <li>Quick links to important pages</li>
    <li>Notifications or messages</li>
    <li>User profile information</li>
    <li>And much more...</li>
  </ul>
  <p>Feel free to modify this dashboard to suit your needs.</p>
  {{-- <p><a href="{{route('login')}}" class="logout-button">Logout</a></p> --}}
</div>
@endsection