<?php
  $user="root";
  $pass="";
  $db="Car";
  mysql_connect("localhost",$user,$pass)
   or die("Could not connect: ".mysql_error());
  mysql_select_db($db)
     or die("Could not select database: ".mysql_error()); 
?>  