<?php
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$phone_number = $_POST["phone_number"];
$location = $_POST["location"];
$transilation =$_POST["transilation"];

$conn = new mysqli('localhost', 'root', '', 'dataschema');
// connection established

$sql = "INSERT INTO user_details (fullname, email, phone_number, location, transilation) VALUE('$fullname', '$email', '$phone_number', '$location', '$transilation')";

if($conn->query($sql)===TRUE){
 //checking wither query executed or not
    echo "Data Inserted";
}
else {
    echo "Error:".$sql."<br>".$conn->error;
}
