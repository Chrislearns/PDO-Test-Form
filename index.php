<?php
try{
$conn = new PDO('mysql:host=localhost;dbname=grievanceInfo;charset=utf8;','phpmyadmin','Cd151988@%');
}

catch(Exception $e) {
   echo "We have an error";
echo $e->getMessage();
    die();
}
