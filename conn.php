<?php

//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'form-data');









/*$mysqli = new mysqli("localhost","root"," ","form-data");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
if (!$mysqli -> query("INSERT INTO `form`(`name`, `gender`,`age`,`mobile`,`father`,`mother`,`contact`,`address`,`college`,`experience`,`skills`) VALUES ( '$name', '$gender','$age','$mobile','$father','$mother','$contact','$address','$college','$experience','$skills')")) {
  echo("Error description: " . $mysqli -> error);
}

$mysqli -> close();*/

//$sql = "SELECT * FROM form";
//$result = mysqli_query($db, $sql) ;
 //die( mysqli_error($form-data));


?>