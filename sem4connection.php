<html>
<head>
<link rel="icon" href="logo.jpeg">
<title>Cricpedia</title>
</head>
<body>

<?php

$servername="localhost";
$usename="root";
$password="";
$dbname="newsletter";
$conn=mysqli_connect($servername,$usename,$password,$dbname);

if($conn)
{
   // echo "Connection OK";
}
else
{
   // echo"Connection Failed".mysqli_connect_error();
}
?>
</body>
</html>