<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
    echo "<script> alert('connection sequare')</script>";

$con=mysqli_connect("localhost","root","","newregform");
if($con){
    echo "<script> alert('connection secussfully')</script>";

}
else{
    die(mysqli_error($con));
}

    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpas=$_POST['cpassword'];

    $sql="SELECT * FROM `register` WHERE email='$email'";

    $result=mysqli_query($con,$sql);
    
        if($result){
            $num=mysqli_num_rows($result);

            if($num>0){
                    echo "<script> alert('user alredy exists')</script>";

            }else{
                    if($password===$cpas){
                $sql= "INSERT INTO `register`(`firstname`, `lastname`, `email`, `password`) VALUES ('$fname','$lname','$email','$password')";
                $result=mysqli_query($con,$sql);
                if($result){
                echo "<script> alert('data inserted secussfully')</script>";
                    
                }
                else{
                    die(mysqli_error($con));
            
                }}
                else{
                echo "<script> alert('please check your password')</script>";

                }
            
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
<center> <form class="form" action="sing.php"  method="POST">
    <p class="title">Sign_up form </p>
    <p class="message">Signup now and get full access to our app. </p>
        <div class="flex">
        <label>
            <input required="" placeholder="" type="text" class="input" name="firstname" >
            <span>Firstname</span>
        </label>

        <label>
            <input required="" placeholder="" type="text" class="input" name="lastname">
            <span>Lastname</span>
        </label>
    </div>  
            
    <label>
        <input required="" placeholder="" type="email" class="input" name="email">
        <span>Email</span>
    </label> 
        
    <label>
        <input required="" placeholder="" type="password" class="input" name="password">
        <span>Password</span>
    </label>
    <label>
        <input required="" placeholder="" type="TEXT" class="input" name="cpassword">
        <span> Comfirm Password</span>
    </label>
    <button class="submit" name="submit">sign in</button>
    <p class="signin">Already have an acount ? <a href="#">login</a> </p>
</form>
</center>
</body>
</html>