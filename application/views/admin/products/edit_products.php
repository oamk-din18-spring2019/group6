


<h2>Edit</h2>
<form class="" action="<?php echo site_url('admin/products/edit_products'); ?>" method="post">
  <label for="">ID</label> <br>
  <input type="number" name="id" value="<?php echo $products[0]['idproducts']; ?>"> <br>

  <label for="">NAME</label> <br>
  <input type="text" name="name" value="<?php echo $products[0]['productName']; ?>"> <br>

  <label for="">Description</label> <br>
  <input type="text" name="des" value="<?php echo $products[0]['description']; ?>"> <br>

  <label for="">BRAND</label> <br>
  <input type="text" name="brand" min="1" value="<?php echo $products[0]['brand']; ?>"> <br>

  <label for="">TYPE</label> <br>
  <input type="text" name="type" value="<?php echo $products[0]['type']; ?>"> <br>

  <label for="">Quantity</label> <br>
  <input type="text" name="quantity" value="<?php echo $products[0]['quantity']; ?>"> <br>

	<label for="">Price</label> <br>
  <input type="number" name="price" value="<?php echo $products[0]['price']; ?>"> <br>

	<label for="">IMAGE</label> <br>
  <input type="text" name="img" value="<?php echo $products[0]['image']; ?>"> <br>

  <input type="hidden" name="current_id" value="<?php echo $current_id; ?>">
  <input type="submit" name="" value="Save">
	<!-- <input type="button" name="" value="Cancel" onlick="<?php echo site_url('admin/products/show_products'); ?>"> -->
</form>
