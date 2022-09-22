<?php
	if(isset($_POST["catID"])){
		$id=$_POST["catID"];
		$name=$_POST["catName"];
		require_once("connection.php");
		$sql=$conn->prepare("UPDATE category SET categoryName=:catName WHERE categoryID=:id");
		$res=$sql->execute(array(':catName' => $name, ":id"=>$id));
	}
	header("location:index.php");
?>