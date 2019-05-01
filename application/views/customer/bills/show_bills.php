<h2>Bills</h2>
<table border="1">
  <thead>
    <tr><th>Bill id</th><th>customer id</th><th>firstname</th><th>Lastname</th>
      <th>product id</th><th>product name</th><th>quantity</th><th>price</th></tr>
  </thead>
  <tbody>
    <?php
    foreach ($bills as $row) {
      echo '<tr>';
        echo '<td>'.$row['idbills'].'</td>';
        echo '<td>'.$row['idcustomer'].'</td>';
        echo '<td>'.$row['firstname'].'</td>';
        echo '<td>'.$row['lastname'].'</td>';
        echo '<td>'.$row['idproducts'].'</td>';
        echo '<td>'.$row['product_name'].'</td>';
        echo '<td>'.$row['amount'].'</td>';
        echo '<td>'.$row['totalOfMoney'].'</td>';

      echo '</tr>';
    }
    ?>
  </tbody>
</table>
