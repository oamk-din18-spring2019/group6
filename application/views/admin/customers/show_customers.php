<h2>Customers</h2>
<table border="1">
  <thead>
    <tr><th>Customer Id</th><th>Username</th><th>Firstname</th><th>Lastname</th>
      <th>Address</th><th>Phone</th><th>Email</th><th>Postal Code</th></tr>
  </thead>
  <tbody>
    <?php
    foreach ($customers as $row) {
      echo '<tr>';
        echo '<td>'.$row['idcustomer'].'</td>';
        echo '<td>'.$row['username'].'</td>';
        echo '<td>'.$row['firstname'].'</td>';
        echo '<td>'.$row['lastname'].'</td>';
        echo '<td>'.$row['streetAddress'].'</td>';
        echo '<td>'.$row['phoneNumber'].'</td>';
        echo '<td>'.$row['email'].'</td>';
        echo '<td>'.$row['postalCode'].'</td>';
        echo '</tr>';
    }
    ?>
  </tbody>
</table>
