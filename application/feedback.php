

<?php
$studentName=$_POST["studentName"];
$companyName=$_POST["companyName"];
$course=$_POST["course"];
$designation=$_POST["designation"];
$companyLocation=$_POST["companyLocation"];
$batchYear=$_POST["batchYear"];
$email=$_POST["email"];
$address=$_POST["address"];
$phonenumber=$_POST["phonenumber"];
$comment=$_POST["comment"];

$link= mysqli_connect("localhost","root","","alumini");
if($link===false)
{
    die("ERROR:Could not connect.".mysqli_connect_error());

}
$query="insert into feedback(studentName,companyName,course,designation,companyLocation,batchYear,email,address,phonenumber,comment)
values('$studentName','$companyName','$course','$designation','$companyLocation','$batchYear','$email','$address','$phonenumber','$comment')";

$flag=mysqli_query($link,$query);
if($flag) 
{
   header("Location:index.html");
   
    
}
else
{
   header("location:index.html");
}

?>
