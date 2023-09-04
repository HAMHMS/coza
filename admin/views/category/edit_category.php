<?php
$id = $_GET['id'];
include 'functions/connect.php';
$select = "SELECT * FROM category WHERE id = $id";
$query = $conn -> query($select);
$cat = $query -> fetch_assoc();
?>
<form method="post" action="functions/category/update_category.php" enctype="multipart/form-data">
   <input type="hidden" name="id" value="<?= $cat['id'] ?>">
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Category Name:</label>
        <input type="text" class="form-control" placeholder="Enter Category Name" name="name" value="<?= $cat['name'] ?>">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Category Image:</label>
        <input type="file" class="form-control" name="image" value="<?= $cat['image'] ?>">
    </div>
    <input type="hidden" name="old_img" value="<?= $cat['image'] ?>">
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Category Date:</label>
        <input type="text" class="form-control" placeholder="Enter category date" name="date" value="<?= $cat['date'] ?>">
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-primary" style="display: block;"> <i class="fa fa-plus"></i> Add </button>
</form>