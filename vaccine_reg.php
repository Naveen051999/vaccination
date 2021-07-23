<?php
//include("db_connection.php");


 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "vaccination";


 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
//print_r($conn);die;
$name = $_POST['name'];
$gender=$_POST['gender'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$vaccine = $_POST['vaccine'];
$vaccinedate= $_POST['vaccinedate'];
$nxtdose = $_POST['nxtdose'];
$address= $_POST['address'];
$certificate = $_FILES['certificate']['name'];

//print_r($certificate);die;


//print_r($_FILES['propic']['name']);die;
 
$target_path = "C:/xampp/htdocs/sample/testing/vaccine_img/";  

$target_path = $target_path.basename($_FILES['certificate']['name']);
//print_r($target_path);die;   
  
if(move_uploaded_file($_FILES['certificate']['tmp_name'],$target_path)) 
{  
    echo "File uploaded successfully!";  
} else{  
    echo "Sorry, file not uploaded, please try again!";  
} 


$sql = "INSERT INTO uservaccine (name,gender,dob,phone,email,vaccine,vaccinedate,nxtdose,address,certificate) VALUES ('$name','$gender','$dob','$phone','$email','$vaccine','$vaccinedate','$nxtdose','$address','$certificate')";
if(mysqli_query($conn,$sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. "; 
}
?>