<div style="display: block">
  <div>
    <h2 style="text-align: center">Search Products</h2>
    <table border="1" style="width: 1000px">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Description</th>
          <th>Brand</th>
          <th>Type</th>
          <th>Quantity</th>
          <th>Price (Euro)</th>
          <th>Image</th>
        </tr>
      </thead>
      <tbody>
          <?php

            foreach ($product as $search) 
            {
              echo '<tr>';
                echo '<td>'.$search['idproducts'].'</td>';
                echo '<td>'.$search['productName'].'</td>';
                echo '<td>'.$search['description'].'</td>';
                echo '<td>'.$search['brand'].'</td>';
                echo '<td>'.$search['type'].'</td>';
                echo '<td>'.$search['quantity'].'</td>';
                echo '<td>'.$search['price'].'</td>';
                echo '<td><img style="width:100px" src="'.$search['image'].'"/></td>';
                echo '</tr>';
            }
          ?>
      </tbody>
    </table>
  </div>
