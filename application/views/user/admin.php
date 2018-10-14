<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Adminpanel</title>
	<link rel="stylesheet" href="">
	<style>
	body
	{
		margin: 0px;
		border: 0px;
	}


	#head
	{
		width: 100%;
		height: 200px;
		background:black;
		color:white;

	}
	#head img
	{
		float:center;
		margin-left: 600px;


	}
	#head h1
	{
		float:center;
		margin-left: 550px;

	}
	#sidebar
	{
		width: 300px;
		height:400px;
		background: black;
		float: left;
	}

     #data
     {
     	height:700px;
     	background:grey;
     	color: white;

     }
     #adminlogo
     {
     	border-radius: 50px;
     	float:center; 
     }

    ul li {
    	padding: 20px;
    	border-bottom: 2px solid grey;
    	color:white;

    }
     ul li a : hover{
     	background:grey;
     }


    </style>


</head>
<body>
	<div id="head">
		<centre><img src = "adminicon.png" alt="no image" id="adminlogo"></centre><br> <h1>The admin panel</h1>

	</div>

	<div id="sidebar">
		<ul>
			<a href="add.php" style="color : black; text-decoration: none"> <li> Add data</li></a>
			<a href="#" style="color : black; text-decoration: none"> <li> Delete data</li></a>
			<a href="#" style="color : black; text-decoration: none"> <li> Update development</li></a>
			<a href="#" target ="_blank" style="color : black; text-decoration: none" ><li> Developer</li>
		</ul>
		
	</div>

	<div id="data"><br>
		<center><h3> hello</h3>
			<p> I am Ramez</p>
		
	</div>

	
</body>
</html>