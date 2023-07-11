<?php
$studentName=$_POST["studentName"];
$course=$_POST["course"];
$email=$_POST["email"];
$address=$_POST["address"];
$phonenumber=$_POST["phonenumber"];


$link= mysqli_connect("localhost","root","","mgmfeedback");
if(!$link)
{
    die("ERROR:Could not connect.".mysqli_connect_error());

}
$query="insert into registration values('$studentName','$course','$email','$address','$phonenumber')";

$flag=mysqli_query($link,$query);
if($flag) 
{
   echo"registred successfully";
    
}
else
{
   echo"not registred   successfully";
}

?>
