
<div style="margin-left: 260px">
<h2>Delete Products</h2>
<p>
  Do you want to delete the :" <?php echo $chosen_products[0]['productName']; ?> ": <br>
</p>
<ul>
    <h3>
	  <li>ID : <?php echo $chosen_products[0]['idproducts']; ?></li>
	  <li>Name : <?php echo $chosen_products[0]['productName']; ?></li>
	  <li>Description : <?php echo $chosen_products[0]['description']; ?></li>
	  <li>Image : <?php echo '<img style="width:100px" src="'.$chosen_products[0]['image'].'"/>'; ?> </li>
	</h3>
</ul>
<a href="<?php echo site_url('admin/products/delete_products/').$chosen_products[0]['idproducts']; ?>"><button>DELETE</button></a>
<a href="<?php echo site_url('admin/products/show_products'); ?>"><button>CANCEL</button></a>

</div>