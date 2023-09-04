<a href="?action=add" class="btn btn-primary"> <i class="fa fa-plus"></i> Add New Product</a>
<table class="table">
  <thead>
    <tr>
      <th class="header">Product Image</th>
      <th class="header">Product Name</th>
      <th class="header">Product Price</th>
      <th class="header">Product Sale</th>
      <th class="header">Product Stock</th>
      <th class="header">Controls</th>
    </tr>
  </thead>
  <tbody>

    <?php
    include 'functions/connect.php';
    $select = "SELECT * FROM products";
    $query = $conn -> query($select); 
    foreach ($query as $pro) {
    ?>
    <tr>
      <td><img style="width: 100px" src="images/<?= $pro['image'] ?>"></td>
      <td><?= $pro['name'] ?></td>
      <td><?= $pro['price'] ?></td>
      <td><?= $pro['sale'] ?></td>
      <td><?= $pro['stock'] ?></td>
      <td>
      <a class="btn btn-primary" href="?action=edit&id=<?= $pro['id'] ?>">Edit</a>
      <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= $pro['id'] ?>">
          Delete
        </button>

        <!-- Modal -->
        <div class="modal fade" id="<?= $pro['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                are you sure you want to delete <?= $pro['name'] ?> 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="../admin/functions/product/delete_product.php?id=<?= $pro['id'] ?>" class="btn btn-danger">confirm</a>
              </div>
            </div>
          </div>
        </div>
      </td>  
      <?php } ?>  
    </tr>

  </tbody>
</table>