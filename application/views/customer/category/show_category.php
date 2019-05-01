
		<div id="items">
      <?php
      foreach ($category as $row ) {

      echo '<div class="box">';
      //echo '<div class="img">';
      echo'<p class="img" style="width : 200px;"><img class="img" src="'.base_url('public/image/'.$row['image']).'"></p>';
      //echo '</div>';
      echo '<p >';
      echo $row['productName'];
      echo '</p>';
      echo '<p>';
      echo $row['price'];
      echo '</p>';
			echo '<p><button class="btn btn-primary"><a href="'.site_url('/customer/items/show_items/');
      echo $row['idproducts'].'">';
			echo 'View product</a></button></p>';
      echo '</div>';


    }
    ?>
		</div>
