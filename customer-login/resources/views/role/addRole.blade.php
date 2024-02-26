<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    .sidebar {
        position: fixed;
        width: 250px;
        height: 100%;
        background: #333;
        color: #fff;
        padding-top: 20px;
    }

    .sidebar ul {
        list-style-type: none;
        padding: 0;
    }

    .sidebar ul li {
        padding: 10px;
        border-bottom: 1px solid #555;
    }

    .sidebar ul li a {
        color: #fff;
        text-decoration: none;
    }

    .content {
        margin-left: 250px;
        padding: 20px;
    }

    .header {
        background: #222;
        color: #fff;
        padding: 20px;
        text-align: center;
    }

    .footer {
        background: #222;
        color: #fff;
        padding: 10px 0;
        text-align: center;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
    table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
         /* Style for the buttons */
    .button-group button {
        padding: 5px 10px;
        margin-right: 5px;
        border: none;
        cursor: pointer;
        border-radius: 3px;
    }

    /* Edit button style */
    .button-edit {
        background-color: #3498db;
        color: #fff;
    }

    /* View button style */
    .button-view {
        background-color: #2ecc71;
        color: #fff;
    }

    /* Delete button style */
    .button-delete {
        background-color: #e74c3c;
        color: #fff;
    }
    form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 0 auto;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
</style>
</head>
<body>

    <div class="sidebar">
        <ul>
            <li><a href="{{route('register')}}"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="#"><i class="fas fa-users"></i> Users</a></li>
            <li><a href="{{route('addRole')}}"><i>ADD ROLE</i></a></li>
            <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
            <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            
        </ul>
    </div>

<div class="content">
    <div class="header">
        <h1>ADD ROLE </h1>
    </div>
    <p></p>
    <br>
    <div>
        <form action="{{route('addRole.post')}}" method="POST">
            {{-- <label for="user_id">User ID:</label><br>
            <input type="text" id="user_id" name="user_id"><br> --}}
            @csrf
    
            <label for="role_id">Role ID:</label><br>
            <input type="text" id="role_id" name="role_id"><br>
    
            <label for="role_name">Role Name:</label><br>
            <input type="text" id="role_name" name="role_name"><br>
    
            <input type="submit" value="Submit">
        </form>
    </div>
</div>



<div class="footer">
    <p>Footer Content</p>
</div>

</body>
</html> 