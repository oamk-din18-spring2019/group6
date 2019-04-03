

<h2>Delete Products</h2>
<p>
  Do you want to delete the :" <?php echo $chosen_products[0]['productName']; ?> ": <br>
</p>
<ul>
    <h3>
	  <li>ID : <?php echo $chosen_products[0]['idproducts']; ?></li>
	  <li>Name : <?php echo $chosen_products[0]['productName']; ?></li>
	  <li>Description : <?php echo $chosen_products[0]['description']; ?></li>
	  <li>Brand and Type : <?php echo $chosen_products[0]['brand']['type']; ?></li>
	</h3>
</ul>
<a href="<?php echo site_url('products/delete_products/').$chosen_products[0]['idproducts']; ?>"><button>DELETE</button></a>
<a href="<?php echo site_url('products/show_products'); ?>"><button>CANCEL</button></a>
