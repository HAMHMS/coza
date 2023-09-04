<?php

$id = $_POST['id'];
$name = $_POST['name'];
$name = $_POST['date'];
include '../connect.php';

$update = "UPDATE category SET 	
			name = '$name' , 
			price = '$date' 

			WHERE id = $id 
";

if ($conn -> query($update)) {

	header("location: ../../product.php");

}
else {

	echo $conn -> error ;
}