<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        *{
            text-decoration: none;
            font-family: Arial, Helvetica, sans-serif;
          background: url(bg.jpg);
          background-repeat: no-repeat;
          margin-top: 0%;  
          background-size:1450px 600px;
        }
        .navbar{
            box-sizing: border-box;
            
            background-color: #e3c4bb;
            position: fixed;
            display: flex;
            top: 0;
            left: 0;
            width: 100%;
            height: 13%;
            align-items: center;
        }
        .navdiv{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .logo a{
            font-size: 35px;
            font-weight: 600;
            color: crimson;
            font-family:Arial, Helvetica, sans-serif;
            font-style: italic;

        }
        button{
            background-color: rgb(252, 62, 138);
            margin-left: 10px;
            border-radius: 10px;
            padding: 10px;width: 90px;
        }
        button a{
            color: white;
            font-weight: bold;
            font-size: 15px;
        }
        
        .content h1{
            position: absolute;
            margin-top: 14%;
            margin-left: 7%;
            margin-bottom: 20px;
            color: rgb(4, 32, 125);
            font-size: 50px;
            font-family: 'Times New Roman', Times, serif;
            
        }
        .content span{
            color: rgb(146, 17, 17);
            font-size: 40px;
            font-family:cursive  Arial, Helvetica, sans-serif ;
            font-style: italic;
        }
        
    </style>
</head>
<body>
    <header>
    <nav class="navbar">
        <div class="navdiv">
            <div class="logo"><a href="#">SiRi Fashions</a></div>
        <ul>
        <button><a href="login.html">Login</a></button>
        <button> <a href="register.html">Register</a></button>
        <button><a href="home.html">home</a></button>
        </ul>
        </div>
    </div>
    </nav>
    </header>
    <div class="content">
    <h1>Design Your Destiny:<br><span>"Customize Your Fashion"</span></h1>
     
</div>
    
</body>
</html>