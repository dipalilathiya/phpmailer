<?php  
session_start();
include("config.php");      
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="select * from register where Email='$email' and Password='$password'";
    $result=mysqli_query($connection,$query);
    if(mysqli_fetch_assoc($result))
    {
       header("Location:smtp.php");
    }
    else
    {
      echo"Plz register";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .item1{
        width: 400px;
        height: 240px;
        background-color: black;
        margin: auto;
        border-radius: 30px;
      
        /* border: 7px solid rgb(141, 91, 91); */
        /* box-shadow: 1px 1px 10px 1px black; */
        color: white;
    }
    .item2{
        width: 300px;       
        margin: auto;
        height: 200px;
        background-color: black;
        border: 1px solid rgb(0, 0, 0);
        color: white;
    }
    .sub input{
       width: 250px;
       height: 40px;
       background-color:  rgb(141, 91, 91);
      margin-top: 30px;
      border: 1px solid white;
      border-radius: 10px;
       color: white;
    }
</style>
<body>
    <div class="item1">
        <div class="item2">
     <form method="post">
           <p>Email</p>
           <input type="email" name="email">
           <p>Password</p>
           <input type="password" name="password">
           <div class="sub">
            <input type="submit" name="submit">
        </div>
        </form>
    </div>
    </div>
    <a href="http://localhost/PHPMailer-5.2.28/otp.php">Clike</a>
</body>
</html>