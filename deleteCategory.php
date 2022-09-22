<?php
	if(isset($_GET["id"])){
		$id=$_GET["id"];
		require_once("connection.php");
		$sql=$conn->prepare("DELETE FROM category WHERE categoryID=:id");
		$res=$sql->execute(array(":id"=>$id));
	}
	header("location:index.php");
?>