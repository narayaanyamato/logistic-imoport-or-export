

<?php 
 
  $servername="localhost";
  $username="root";
  $passord="";
  $dbname="php-cms";
    $con=mysqli_connect($servername,$username,$passord,$dbname);
  if(!$con)
  {
  	die("<h2>Connection failed..</h2>" .mysqli_connect_error());
  }
 


?>