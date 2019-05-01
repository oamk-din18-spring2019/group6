

		<div id="items">
      <?php
      foreach ($items as $row) {
        // code...

    echo '<div class="left">';
    echo '<img src="'.base_url('public/image/'.$row['image']).'" alt="download.jpeg" height="280" width="450">';


  echo '</div>';
  echo '<div class="right">';

    echo '<b>'.$row['productName'].'</b>';
    echo '<p>'.$row['description'].'</p>';
		echo '<h1>'.$row['price'].'</h1>';
    echo '<button type="button" name="button"><a href="'.site_url('customer/cart/add/'.$row['idproducts']).'">Add to cart</a></button>';
echo '</div>';
}
    ?>
  </div>
