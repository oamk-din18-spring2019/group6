

		<div class="items">
      <?php
      foreach ($items as $row) {
        // code...

    echo '<div class="left">';
    echo '<img src="https://c.static-nike.com/a/images/t_PDP_1280_v1/f_auto/acq6wgi3oxsvgbi0hnat/air-huarache-ultra-shoe-pvTlZxPy.jpg" alt="download.jpeg" height="280" width="450">';


  echo '</div>';
  echo '<div class="right">';

    echo '<b>'.$row['productName'].'</b>';
    echo '<p>'.$row['description'].'</p>';
		echo '<h1>'.$row['price'].'</h1>';
    echo '<button type="button" name="button"><a href="'.base_url('customer/cart/add/'.$row['idproducts']).'">Add to cart</a></button>';

}
    ?>
  </div>
