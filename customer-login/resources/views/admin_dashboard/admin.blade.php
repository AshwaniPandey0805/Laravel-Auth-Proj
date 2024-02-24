<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body{
                margin: 0;
                padding: 0;
                font-family: sans-serif;
            }

            header{
                position: fixed;
                background: #22242a;
                padding: 20px;
                width: 100%;
                height: 30px;
            }

            .left_side h3{
                color: #fff;
                margin: 0;
                text-transform: uppercase;
                font-size: 22px;
                font-weight: 900;

            }

            .left_side span{
                color: #19B3D3;
            }

            .side-nav{
                background: #2f323a;
                margin-top: 70px;
                padding-top: 30x;
                position: fixed;
                left: 0;
                width: 250px;
                height: 100%;
                transition: 0.5s;
                transition-property: left;
            }

            .logo{
                text-align: center;

            }

            .side-nav .image{
                width: 100px;
                height: 100px;
                border-radius: 100px;
                margin-bottom: 10px;
            }

            .side-nav a{
                color: #fff;
                display: block;
                width: 100%;
                line-height: 60px;
                text-decoration: none;
                padding-left: 40px;
                box-sizing: border-box;
                transition: 0.5s;
                transition-property: background;
            }

            .side-nav a:hover{
                background: #0a7e96;
            }

            .side-nav i{
                padding-right: 10px;

            }

            label #side-nav_btn{
                z-index: 1;
                color: #fff;
                position: fixed;
                cursor: pointer;
                left: 300px;
                font-size: 20px;
                margin: 5px 0;
                transition-property: color;

            }

            label #side-nav_btn:hover{
                color: #19B3D3;

            }

            #check:checked ~ .side-nav{
                left: -190px;
            }

            #check:checked ~ .side-nav a span{
                display: none;
            }
            #check:checked ~ .side-nav a{
                font-size: 20px;
                margin-left: 170px;
                width: 80px;
            }

            .banner{
                margin-left: 250px;
                background-image: url(https://www.wallpaperflare.com/static/921/270/334/minimalism-red-low-poly-abstract-wallpaper.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                height: 100vh;
                transition: 0.5s;

            }

            #check:checked ~ .banner{
                margin-left: 60px;
            }

            #check{
                display: none;
            }

            span{
                margin-left: 20px;
            }
    </style>
</head>
<body>

    <input type="checkbox" id="check">
    <header>
        <label for="check">
            <i class="fa fa-bars" id="side-nav_btn" ></i>
        </label>
        <div class="left_side" >
            <h3>{{auth()->user()->first_name}} {{auth()->user()->last_name}}</h3>
        </div>
    </header>

    <div class="side-nav">
        <div class="logo">
            <img src="https://s3-alpha.figma.com/hub/file/1913095808/a7bdc469-cd70-4ea1-bb57-b59204ad8182-cover.png" alt="logo" class="image">
        </div>
        <a href="#"><i class="fa fa-desktop" ><span>Dashboard</span></i></a>
        <a href="#"><i class="fa fa-cogs" ><span>Components</span></i></a>
        <a href="#"><i class="fa fa-table" ><span>Tables</span></i></a>
        <a href="#"><i class="fa fa-th" ><span>Forms</span></i></a>
        <a href="#"><i class="fa fa-info-circle" ><span>About</span></i></a>
        <a href="#"><i class="fa fa-sliders" ><span>Settings</span></i></a>
        <a href="{{'logout'}}"><i class="fa fa-sign-out"><span>Logout</span></i></a>
    </div>

    <div class="banner"></div>

</body>
</html>