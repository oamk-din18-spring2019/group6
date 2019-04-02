<h2>Delivery</h2>
<table border="1">
  <thead>
    <tr><th>iddelivery</th><th>firstname</th><th>lastname</th><th>streetAddress</th>
      <th>idBills</th>
  </thead>
  <tbody>
    <?php
    foreach ($customers as $row) {
      echo '<tr>';
        echo '<td>'.$row['iddelivery'].'</td>';
        echo '<td>'.$row['firstname'].'</td>';
        echo '<td>'.$row['lastname'].'</td>';
        echo '<td>'.$row['streetAddress'].'</td>';
        echo '<td>'.$row['idBills'].'</td>';
      echo '</tr>';
    }
    ?>
  </tbody>
</table>
