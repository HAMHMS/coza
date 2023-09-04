<?php

	// Check if the form has been submitted
	if (isset($_GET['submit'])) {
		// Get the search term from the form
		$searchTerm = $_GET['search'];

		// Connect to the database
		include '../admin/functions/connect.php';

		// Execute the search query
		$read = "SELECT * FROM products WHERE name LIKE '%$searchTerm%'";
		$query = $conn->query($read);

		// Display the search results
		if ($query->num_rows == 0) {
			echo "<h1>No results found.</h1>";
		} else {
			while ($pro = $query->fetch_assoc()) {
			?>	
			<div class="row isotope-grid">
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->

					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="../admin/images/<?= $pro['image'] ?>" alt="IMG-PRODUCT">
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="../product-detail.php?id=<?= $pro['id'] ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?= $pro['name'] ?>
								</a>

								<span class="stext-105 cl3">
									$<?= $pro['price'] ?>
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="../images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="../images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>	 
			<?php }
		}
	}
?>