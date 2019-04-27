<div id="items">
      <div class = "box">
        <form action="<?php echo site_url('customer/cart/update')?>" method="post">
      <table border="1">
				<td>ID</td>
				<td>Name</td>
				<td>Price</td>

				<td>Quantity</td>
				<td>Total Money</td>

				<td>Delete</td>
        <?php $total_amounts = 0; ?>
      <?php foreach ($carts as $row):?>
        <?php $total_amounts += $row['subtotal']; ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo number_format($row['price']) ; ?></td>
          <td><input name="qty_<?php echo $row['id']; ?>" value="<?php echo $row['qty'];?>"></td>
          <td><?php echo $row['subtotal']; ?></td>
					<td><a href="<?php echo site_url('customer/cart/delete_item/'.$row['id']); ?>">Delete</a></td>
        </tr>
      <?php endforeach; ?>
    </table>
    <table>
      <tr><p> The total money is <?php echo number_format($total_amounts); ?></p></tr>
      <tr><button type="submit">Update</button></tr>
			<tr><button type="button" name="button"><a href="<?php echo site_url('customer/cart/buy')?>">Buy</a></button></tr>
      <tr><button type="button" name="button"><a href="<?php echo site_url('customer/cart/delete_item')?>">Delete</a></button></tr>
      </table>
    </form>
  </div>
</div>
