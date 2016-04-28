<?php
   //This script connects to my database for the quotes!
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $db = 'lqdwrapsdb';
   
   $db = new mysqli($dbhost,$dbuser,$dbpass, $db) or die("Failed to Connect");
   
   //echo "you connected!!";
?>