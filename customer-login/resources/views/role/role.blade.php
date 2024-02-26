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
        font-weight: 600;
        font-size: 15px
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
        <h1>Welcome to Admin Dashboard</h1>
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu mi ut lacus fermentum luctus. Integer aliquet tristique magna sit amet accumsan. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Role Name</th>
                    <th>Action</th>
                    {{-- <th>Created At</th>
                    <th>Updated At</th> --}}
                </tr>
            </thead>
            <tbody>
                <!-- Loop through roles data and populate rows -->
                @foreach($roles as $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->role_name }}</td>
                    <td class="button-group">
                        <button class="button-edit">Edit</button>
                        {{-- <button class="button-view">View</button> --}}
                        <button class="button-delete">Delete</button>
                    </td>
                    {{-- <td>{{ $role->created_at }}</td>
                    <td>{{ $role->updated_at }}</td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



<div class="footer">
    <p>Footer Content</p>
</div>

</body>
</html>