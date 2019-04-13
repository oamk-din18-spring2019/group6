<?php
foreach ($category as $row ) {
  echo '<div><a href="http://localhost/group6/index.php/customer/items/show_items?id=';
  echo $row['idproducts'].'">' .$row['idproducts'].'</a></div>';
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Nhim's</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="http://localhost/group6/public/css/category.css">
    </head>
    <body>
        <div id="background_top">

        </div>
        <div id="menu_top">
            <ul>
                <li><a href="#" title="Home">Home</a></li>
                <li><a href="#" title="About me">About me</a></li>
                <li><a href="#" title="Life in Finland">Life in Finland</a></li>
                <li><a href="#" title="Trips around Europe">Trips around Europe</a></li>
                <li><a href="#" title="Contact information">Contact information</a></li>
                <li><a href="#" title="More">More</a></li>
            </ul>
        </div>
        <div id="main">
          <?php
          foreach ($category as $row ) {
          echo '<a href="http://localhost/group6/index.php/customer/items/show_items?id=';
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
        <div id="footer">Footer</div>
    </body>
</html>
