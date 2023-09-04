<a href="?action=add" class="btn btn-primary"> <i class="fa fa-plus"></i> Add New Category</a>
<table class="table">
  <thead>
    <tr>
      <th class="header">Category Name</th>
      <th class="header">Category Image</th>
      <th class="header">Category Date</th>      
      <th class="header">Controls</th>
    </tr>
  </thead>
  <tbody>

    <?php
    include 'functions/connect.php';
    $select = "SELECT * FROM category";
    $query = $conn -> query($select); 
    foreach ($query as $cat) {
    ?>
    <tr>
      <td><?= $cat['name'] ?></td>      
      <td><img style="width: 100px" src="images/<?= $cat['image'] ?>"></td>
      <td><?= $cat['dat'] ?></td>
      <td>
      <a class="btn btn-primary" href="?action=edit&id=<?= $cat['id'] ?>">Edit</a>
      <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= $cat['id'] ?>">
          Delete
        </button>

        <!-- Modal -->
        <div class="modal fade" id="<?= $cat['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                are you sure you want to delete <?= $cat['name'] ?> 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="functions/category/delete_category.php?id=<?= $cat['id'] ?>" class="btn btn-danger">confirm</a>
              </div>
            </div>
          </div>
        </div>
      </td>  
      <?php } ?>  
    </tr>

  </tbody>
</table>