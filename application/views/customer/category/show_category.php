
		<div id="items">
      <?php
      foreach ($category as $row ) {
      echo '<a href="'.base_url('/customer/items/show_items/');
      echo $row['idproducts'].'">';
      echo '<div class="box">';
      echo '<div class="img">';
      echo'<img class="img" src="https://c.static-nike.com/a/images/t_PDP_1280_v1/f_auto/acq6wgi3oxsvgbi0hnat/air-huarache-ultra-shoe-pvTlZxPy.jpg">';
      echo '</div>';
      echo '<div class="productName">';
      echo $row['productName'];
      echo '</div>';
      echo '<div class="price">';
      echo $row['price'];
      echo '</div>';
      echo '</div>';

      echo '</a>';
    }
    ?>
		</div>
