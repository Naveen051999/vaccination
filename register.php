<?php
//include("db_connection.php");


 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "testing";


 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
$name = $_POST['name'];
$mobno =$_POST['mobno'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$bdgrp = $_POST['bdgrp'];
$propic= $_POST['propic'];
$address = $_POST['address'];
//$image


//print_r($_FILES['propic']['name']);die;
 
$target_path = "C:/xampp/htdocs/sample/testing/img/";  

$target_path = $target_path.basename($_FILES['propic']['name']);
//print_r($target_path);die;   
  
if(move_uploaded_file($_FILES['propic']['tmp_name'],$target_path)) 
{  
    echo "File uploaded successfully!";  
} else{  
    echo "Sorry, file not uploaded, please try again!";  
} 


$sql = "INSERT INTO registration_form (name,mobno,email,gender,bdgrp,propic,address) VALUES ('$name','$mobno','$email','$gender','$bdgrp','$propic','$address')";
if(mysqli_query($conn,$sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. "; 
}
?>