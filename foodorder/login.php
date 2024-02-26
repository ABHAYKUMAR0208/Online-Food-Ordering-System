<?php
 
 $host = "localhost";
 $user = "abhay";
 $password = "abhay";
 $db = "foodorder";

 session_start();

 $data = mysqli_connect($host,$user,$password,$db);
 if($data===false)
 {
    die("connection error");
 }

 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
    $username = $_POST["username"];
    $password = $_POST["password"];


    $sql = "select * from adminlogin where username='".$username."' AND password='".$password."'";

    $result = mysqli_query($data,$sql);
    
    $row = mysqli_fetch_array($result);

    if ($row["usertype"]=="user")
    {
        $_SESSION["username"]=$username;
        header("location:userhome.php");
    }

    elseif($row["usertype"]=="admin")
    {
        $_SESSION["username"]=$username;
         
        header("location:adminhome.php");    }

    else
    {
        echo"username or password incorrect";
    }
}

 ?>




















<!DOCTYPE html>
<html>
    <head>
        <title></title>
</head>
<body>
    <center>

    <h1>Login Form</h1>
    <br><br><br><br>
        <div style="background-color: skyblue; width: 500px;">
        <br><br>

        <form action="" method="POST">

    <div>
        <lable>username</lable>
        <input type="text" name="username" required>
    </div>
    <br><br>

    <div>
        <lable>password</lable>
        <input type="password" name="password" required>
    </div>
   <br><br>
    <div>

    <input type="submit" value="Login">
    <br>
    <a href="index.php" class="nav-item nav-link">register</a>
</div>
</form>
<br><br>
</div>

</center>

</body>
</html>


