<?php
try{
    $conn=new PDO("mysql:host=localhost;dbname=food_delivery","root","");
    // echo "Connection success";
}
catch(PDOException $ex){
    // die("Connection Failled");
}    

?>