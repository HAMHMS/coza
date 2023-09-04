<?php


$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$sale = $_POST['sale'];
$stock = $_POST['stock'];
$image = $_POST['image'];
$cat = $_POST['cat'];

include '../connect.php';

$update = "UPDATE products SET 	
			name = '$name' , 
			price = '$price' , 
			sale = '$sale' , 
			stock = '$stock' ,
			image = '$image', 
			cat_id = '$cat'

			WHERE id = $id 
";

if ($conn -> query($update)) {

	header("location: ../../product.php");

}
else {

	echo $conn -> error ;
}