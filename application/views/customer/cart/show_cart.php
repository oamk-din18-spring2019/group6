<div id="items">
      <div class="cart-table">
        <form action="<?php echo site_url('customer/cart/update')?>" method="post">
      <table class="table">

				<td>Name</td>
        <td>Image</td>
				<td>Price</td>

				<td>Quantity</td>
				<td>Total Money</td>

				<td>Delete</td>
        <?php $total_amounts = 0; ?>
      <?php foreach ($carts as $row):?>
        <?php $total_amounts += $row['subtotal']; ?>
        <tr>

          <td><?php echo $row['name']; ?></td>
          <td><img src="<?php echo base_url('public/image/'.$row['image']); ?>"class="item-img"></td>
          <td><?php echo number_format($row['price']) ; ?></td>
          <td><input type="number" name="qty_<?php echo $row['id']; ?>" value="<?php echo $row['qty'];?>" style="width :30px;"></td>
          <td><?php echo $row['subtotal']; ?></td>
					<td><a href="<?php echo site_url('customer/cart/delete_item/'.$row['id']); ?>">Delete</a></td>
        </tr>
      <?php endforeach; ?>
</table>

<table>
      <tr><p> The total money is <?php echo number_format($total_amounts); ?></p></tr>
      <tr><button type="submit" class="btn btn-default">Update</button></tr>
			<tr><button type="button" name="button" class="btn btn-default" style="margin-left: 10px;"><a href="<?php echo site_url('customer/cart/buy')?>">Buy</a></button></tr>
      <tr><button type="button" name="button" class="btn btn-default" style="margin-left: 10px;"><a href="<?php echo site_url('customer/cart/delete_item')?>">Clear</a></button></tr>
      </table>
    </form>
</div>
</div>
