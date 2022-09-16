<?php
if(isset($_POST["catName"])){
    echo "sdfasd";
    $cat=$_POST["catName"];
    require_once("connection.php");
    $query1 = $conn->prepare("INSERT INTO category(categoryName) VALUES(:category)");
$query1->execute(array(":category"=>$cat));
header("location:index.php");
}
echo "rtyt";
