Code for DatabaseConfig.php file.

<?php

//Define your host here.
$HostName = "mysql.hostinger.in";

//Define your database username here.
$HostUser = "u288012116_json";

//Define your database password here.
$HostPass = "N1c45hlf";

//Define your database name here.
$DatabaseName = "u288012116_json";

?>

Code for get_data.php file.

<?php

include 'DatabaseConfig.php' ;
 
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
 $name = $_POST['name'];
 $email = $_POST['email'];

 $Sql_Query = "insert into GetDataTable (name,email) values ('$name','$email')";
 
 if(mysqli_query($con,$Sql_Query)){
 
 echo 'Data Submit Successfully';
 
 }
 else{
 
 echo 'Try Again';
 
 }
 mysqli_close($con);
?>
