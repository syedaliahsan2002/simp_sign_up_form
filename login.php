<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
    echo "<script> alert('connection sequare')</script>";

$con=mysqli_connect("localhost","root","","newregform");
if(!$con){
    die(mysqli_error($con));

}

    $email=$_POST['email'];
    $password=$_POST['password'];


    $sql = "SELECT * FROM `register` WHERE email='$email' AND password='$password'";
        $result=mysqli_query($con,$sql);
    
        if($result){
            $num=mysqli_num_rows($result);
            if($num>0){
                session_start();
                $_SESSION['email']=$email;
                header('location:welcome.php');

            }else{

              
                     echo "<script> alert('invalid entry')</script>";
                     die(mysqli_error($con));
                    
               
            
            }
        }
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<center> <form class="form" action="#"  method="POST">
    <p class="title">log_in </p>
    <p class="message">Want to login. </p>
               
    <label>
        <input required="" placeholder="" type="email" class="input" name="email">
        <span>Email</span>
    </label> 
        
    <label>
        <input required="" placeholder="" type="password" class="input" name="password">
        <span>Password</span>
    </label>
    
    <button class="submit" name="submit">log in</button>
    <p class="signin">don,t have an acount ? <a href="sing.php">login</a> </p>
</form>
</center>
</body>
</html>