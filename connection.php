<?php
try{
$conn = new PDO('mysql:host=localhost;dbname=verifypassword;charset=utf8;','phpmyadmin','');
}

catch(Exception $e) {
   echo "We have an error";
echo $e->getMessage();
    die();
}