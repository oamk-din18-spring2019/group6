<h2>Profile</h2>
<table border="1">
  <thead>
    <tr><th>username</th><th>firstname</th><th>lastname</th><th>Address</th>
      <th>Postal Code</th><th>contact</th><th>email</th></tr>
  </thead>
  <tbody>
    <?php
    foreach ($profile as $row) {
      echo '<tr>';
        echo '<td>'.$row['username'].'</td>';
        echo '<td>'.$row['firstname'].'</td>';
        echo '<td>'.$row['lastname'].'</td>';
        echo '<td>'.$row['streetAddress'].'</td>';
        echo '<td>'.$row['postalCode'].'</td>';
        echo '<td>'.$row['contact'].'</td>';
        echo '<td>'.$row['email'].'</td>';
      echo '</tr>';
    }
    ?>
  </tbody>
</table>