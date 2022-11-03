<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:blue;
  font-size:22px;
  text-align:center;
 }
</style>
</head>
<body>
<h1>Login<h1>
<form action="todb.php" method="post">
<table cellspacing='5' align='center'>
<tr><td>Password:</td><td><input type='Password' name='Password'/></td></tr>
<tr><td>email:</td><td><input type='email' name='email'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</form>
<body>
<form action="welcome.php" method="post">
<tr><td></td><td><input type='submit' name='signup' value='signup instead'/></td></tr>
</form>
</table>
</form>
<?php

