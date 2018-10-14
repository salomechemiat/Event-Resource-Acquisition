<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Hells gate</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <style>
            body{
	background-image:url("background.png");
	background-repeat:no-repeat;
}
h1{
    color:white;
    background-color:blue;
    
    	height:100px;
	width:100%;
	text-align:center;
      	font-size: 70px;
}
.loginbox{
    width: 320px;
    height: 440px;
    background: rgba(0,0,0,0.4);
    color: white;
    top: 50%;
    left:50%;
    position: absolute;
    transform: translate(-50%, -30%);
    box-sizing: border-box;
    padding: 70px 30px;
}

.login{
    width:100px;
    height:100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
.loginbox p{
    margin:0;
    padding:0;
    font-weight:bold;
}
.loginbox input{
    width:100%;
    margin-bottom: 20px;
}
.loginbox input[type="text"], input[type="password"], input[type="email"]{
    border:none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline:none;
    height:40px;
    color:white;
    font-size: 16px;
}
.loginbox input[type="submit"]{
    border: none;
    outline: none;
    height: 40px;
    background:blue;
    color: #fff;
    font-size: 18px;
    border-radius:20px;
}
.loginbox input[type="submit"]:hover{
    cursor: pointer;
    background:#fff;
    color:blue;
}
.loginbox ul{
    list-style: none;
        
}
.loginbox ul li a{
    text-decoration: none;
    position: relative;
    color: white;
}
.loginbox ul li a:hover{
    text-decoration: underline;
    color: blue;
    background-color: white;
}


        </style>
    </head>
    <body>
        <h1>JuaPark</h1>
        <div class="loginbox">
            <img src="login.jpg" alt="login image" class="login">
            <form action="insert.php" method="POST"> 
                <p><strong>User name</strong></p>
                <input type="text" name="username" placeholder="Enter user name" required="required">
                <p><strong>Email</strong></p>
                <input type="email" name="email" placeholder="email" required="required">
                <P><strong>Password</strong></P>   
                <input type="password" name="password" placeholder="Enter password" required="required">
                <p><strong>Confirm password</strong></p>
                <input type="password" name="password2" placeholder="confirm password" required="required">
                
                <input type="submit" name="submit" value="SignUp">
            </form>
        </div>
    </body>
</html>
