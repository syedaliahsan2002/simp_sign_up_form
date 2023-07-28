<?php
$hostname='localhost';
$username='root';
$password='';
$database='newregform';

$con=mysqli_connect($hostname,$username,$password,$database);

if($con){
    echo "connection sucessful";
}
else{
    die(mysqli_error($con));
}


?>

