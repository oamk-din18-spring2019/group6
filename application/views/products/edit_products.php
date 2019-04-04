
<div style="width: 50%;margin-right: auto;margin-left: auto;float: center;/* text-align: center; */padding-left: 40%;">
	<h2>Edit Products</h2>
	<form class="" action="<?php echo site_url('products/edit_products'); ?>" method="post">
	    <div style="display: flex"> 
	        <div>
	            <p style="padding-top: 4px"><label for="">ID</label></p>
              <p><label for="">Name</label> <br></p>
              <p style="padding-top: 4px"><label for="">Description</label> <br></p>
              <p><label for="">Brand</label> <br></p>
              <p><label for="">Type</label> <br></p>
              <p style="padding-top: 4px"><label for="">Quantity</label> <br></p>
              <p style="padding-top: 4px"><label for="">Price</label> <br></p>
	        </div>
	          
	        <div>
	            <p><input type="number" name="id" value="<?php echo $products[0]['idproducts']; ?>"> <br> </p>  
	            <p><input type="text" name="name" value="<?php echo $products[0]['productName']; ?>"> <br></p> 
	            <p><input type="text" name="des" value="<?php echo $products[0]['description']; ?>"> <br></p>
	            <p><input type="text" name="brand" min="1" value="<?php echo $products[0]['brand']; ?>"> <br></p>
				<p><input type="text" name="type" value="<?php echo $products[0]['type']; ?>"> <br></p>
				<p><input type="text" name="quantity" value="<?php echo $products[0]['quantity']; ?>"> <br></p>
				<p><input type="number" name="price" value="<?php echo $products[0]['price']; ?>"> <br></p>
	            <input type="hidden" name="current_id" value="<?php echo $current_id; ?>">
	        </div>
	    </div>  
	        <button type="submit">SAVE</button>
	        <a href="<?php echo site_url('products/show_products'); ?>"><button>CANCEL</button></a>
	</form>
</div>
