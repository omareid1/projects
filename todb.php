<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab2db";
$email=$_POST["email"];
$Password=$_POST["Password"];
$flag=1;
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO lab2db
VALUES ('$email', '$Password')";
$check="SELECT * FROM lab2db WHERE email='$email'";
$res=$conn->query($check);
if (($res->num_rows>0))
    echo nl2br ("user exists");
else 
    echo nl2br ("user doesn't exist\n");
    $flag=0; 
if (empty($email)) {
    echo "mail empty\n";
    $flag=0;
  }
 if (empty($Password)) {
    echo "password empty\n";
    $flag=0;
  }
  if ($email && $Password) 
{     $conn = mysql_query("SELECT * FROM lab2db WHERE username='$email'");
      $numrow = mysql_num_rows($query2);
  
      if ($numrow != 0) {
          
          while ($row = mysql_fetch_assoc($conn)) {
              $email = $row['$email'];
              $Password = $row['$Password'];
          }
  
          // Check to see if username and password match
          if ($email==$email && $Password==$Password) {
              echo "Log in succeful";
          }
          else {
              echo "log in failed";
          }
      }
    }













else if ($conn->query($sql) === TRUE && $flag==1) {
  echo "Log in Succesful\n";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>