<h2>Customers</h2>
<table border="1">
  <thead>
    <tr><th>Bill id</th><th>customer id</th><th>firstname</th><th>Lastname</th>
      <th>product id</th><th>product name</th><th>quantity</th><th>price</th></tr>
  </thead>
  <tbody>
    <?php
    foreach ($customers as $row) {
      echo '<tr>';
        echo '<td>'.$row['idcustomers'].'</td>';
        echo '<td>'.$row['firstname'].'</td>';
        echo '<td>'.$row['lastname'].'</td>';
        echo '<td>'.$row['streetAddress'].'</td>';
        echo '<td>'.$row['phoneNumber'].'</td>';
        echo '<td>'.$row['username'].'</td>';
        echo '<td>'.$row['password'].'</td>';
        echo '<td>'.$row['email'].'</td>';
        echo '<td>'.$row['postalCode'].'</td>';
        echo '</tr>';
    }
    ?>
  </tbody>
</table>
