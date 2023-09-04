<form method="post" action="functions/category/insert_category.php" enctype="multipart/form-data">
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Category Name:</label>
        <input type="text" class="form-control" placeholder="Enter Category name" name="name">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Category Image:</label>
        <input type="file" class="form-control" name="image">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Category Date:</label>
        <input type="text" class="form-control" placeholder="Enter Category Date" name="title">
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-primary" style="display: block;"> <i class="fa fa-plus"></i> Add </button>
</form>