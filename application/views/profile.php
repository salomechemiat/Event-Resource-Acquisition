
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
   
</head>
<body>

 <?php
 //check for a form submission
 if(isset ($_GET['User_Name'])){
    $username = $_GET ['User_Name'];
    include ("connection.php");
    $userquery =mysql_query("SELECT * FROM register WHERE User_Name='$username'") or die ("The query could not be completed");
    if (mysql_num_rows($userquery)!= 1){
        die("That user name could not be found");
    }
    while ($row = mysql_fetch_array($userquery , MYSQL_ASSOC)){
        $fname = $row ['First_Name'];
        $lname = $row ['Last_Name'];
        $Uid   = $row ['User_Id'];
        $Uname = $row ['User_Name'];
        $Uloca = $row ['User_Location'];
        $Uav   = $row ['user_avatar'];
        $shortb= $row ['user_shortbio'];
        $gender= $row ['User_gender'];
        $Age   = $row ['Age'];
        $numb  = $row ['Phone_number'];
        $mail  = $row ['email'];

    }
    if ($username != $Uname){
        die ("There has been a fatal error. please try again");

    }
    ?>
    <h2><?php echo $uav ?></h2>
    <h2><?php echo $fname  ?>: <?php echo $lastname ?>:  's profile</h2><br><br>
    <table>

        <tr><td>Firstname: </td><td><?pho echo $fname ?>; </td></tr>
        <tr><td>Lastname: </td><td><?pho echo $lname ?> ;</td></tr>
        <tr><td>Bio: </td><td><?pho echo $$shortb ?>; </td></tr>
        <tr><td>Gender: </td><td><?pho echo $gender ?>; </td></tr>
        <tr><td>Age: </td><td><?pho echo $age ?>; </td></tr>
        <tr><td><strong>Contacts</strong><br><br>Phone Number: </td><td><?pho echo $numb ?> ;</td></tr>
        <tr><td>Email: </td><td><?pho echo $mail ?>; </td></tr>
    </table>

<?php
} else die ("user has not been registered");


   
    ?>
    

    
</body>
</html>
