<?php 
include("config.php");      

if(isset($_POST['submit']))
{
   
      $name=$_POST['name'];                                                                                          
      $email=$_POST['email'];                                                                                   
      $password=$_POST['password'];  
      $query1="select * from register where email='$email'";
      $result1=mysqli_query($connection,$query1);
      if(mysqli_num_rows($result1)==0)
      {
          $query="insert into register (Name,Email,Password)values('$name','$email','$password')";
          $result=mysqli_query($connection,$query);
          if($result)
          {
              header("Location:login.php");
              echo"submit";
              
            }
            else{
                echo"can not submit";
            }
        }else
        {
            echo "Email already existed";
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
        height: 400px;
        background-color: black;
        margin: auto;
        border-radius: 40px;
        /* border: 7px solid rgb(141, 91, 91); */
        /* box-shadow: 1px 1px 10px 1px black; */
        color: white;
    }
    .item2{
        width: 300px;
        margin: auto;
        height: 350px;
        background-color: black;
        border: 1px solid rgb(0, 0, 0);
        color: white;
    }
    .item2 input{
       padding: 5px 8px;
    }
    .sub input{
       width: 250px;
       height: 50px;
       background-color:  rgb(141, 91, 91);
      margin-top: 30px;
      border: 1px solid white;
      border-radius: 10px;
       color: white;
    }
    .imgs input{
         width: 500px; 
         margin-top: 20px;
         height: 30px;
    }
</style>
<body>
    <div class="item1">
        <div class="item2">
     <form method="post" >
           <p>Name</p>
           <input type="text" name="name">
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
</body>
</html>