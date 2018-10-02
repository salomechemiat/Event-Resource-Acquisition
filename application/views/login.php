<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <style>
            body{
	background-image:url("background.png");
	background-repeat:no-repeat;
}
h1{
    color:white;
    background-color:grey;
    
    	height:100px;
	width:100%;
	text-align:center;
      	font-size: 70px;
}
.loginbox{
    width: 320px;
    height: 340px;
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
.loginbox input[type="text"], input[type="password"]{
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
       <h1>Event Resource Acquisition</h1>
        <div class="loginbox">
             <img src="assets/avatar.jpg" alt="login image" class="login"> 
            <form action="insert.php" method="POST"> 
                <p><strong> User name</p>
                <input type="text" name="username" placeholder="Enter user name">
                <P>Password</P>   
                <input type="password" name="password" placeholder="Enter password">
                <input type="submit" name="submit" value="Login">
            </form>
            <ul>
                <li><a href="index.php/Users/">Sign up</a></li>
            </ul>
                           
        </div>
    </body>
</html>
