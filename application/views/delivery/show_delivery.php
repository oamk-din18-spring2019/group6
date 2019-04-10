<h2>Delivery</h2>
<table border="1">
  <thead>
    <tr><th>iddelivery</th><th>idBills</th><th>firstname</th><th>lastname</th>
      <th>streetAdress</th><th>date</th></tr>
  </thead>
  <tbody>
    <?php
    foreach ($customer as $row) {
      echo '<tr>';
        echo '<td>'.$row['iddelivery'].'</td>';
        echo '<td>'.$row['idBills'].'</td>';
        echo '<td>'.$row['firstname'].'</td>';
        echo '<td>'.$row['lastname'].'</td>';
        echo '<td>'.$row['streetAdress'].'</td>';
        echo '<td>'.$row[date("F j, Y, g:i a")].'</td>'
      echo '</tr>';
    }
    ?>
  </tbody>
</table>
