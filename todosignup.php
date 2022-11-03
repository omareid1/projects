<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab2db";
$email=$_POST["email"];
$Password=$_POST["Password"];
$name=$_POST["name"];
$confirmpassword=$_POST["confirmpassword"];
$flag=1;
$check;
$res;
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO lab2db (name,email,Password)
VALUES ('$name','$email', '$Password')";
$check="SELECT * FROM lab2db WHERE email='$email'";
$res=$conn->query($check);
if (($res->num_rows>0)){
  echo nl2br ("user exists\n");
  $flag=0;
}
if (empty($name)) {
    echo nl2br("name empty\n");
    $flag=0;
  }
if (empty($email)) {
    echo nl2br ("mail empty\n");
    $flag=0;
  }
 if (empty($Password)) {
    echo nl2br ("password empty\n");
    $flag=0;
  }
if ($Password !== $confirmpassword) {
  echo nl2br ("passwords are not the same\n");
  $flag=0;}

 else if ($conn->query($sql) === TRUE && $flag==1) {
    echo nl2br ("created successfully\n");
  } else {
    echo nl2br ("Error"). $conn->error;
  }
$conn->close();
?>