<?php
 
  $dbservername="localhost";
  $dbusername="root";
  $dbpassword="";
  $dbname="dbhotel";

   $cnx=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
   if($cnx->connect_error){
       die("connexion echoué:".$cnx->connect_error);
   } 