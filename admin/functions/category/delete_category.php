<?php 


$id = $_GET['id'];

include '../connect.php';

$del = "DELETE FROM category WHERE id = $id";

if ($conn -> query($del)) {
	header("location: ../../categories.php");
}else {
	echo $conn -> error ;
}