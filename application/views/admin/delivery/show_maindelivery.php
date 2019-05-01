<h2 style="text-align: center">Delivery</h2>
<table border="1">
  <thead>
    <tr><th>iddelivery</th><th>idBills</th><th>firstname</th><th>lastname</th>
      <th>streetAddress</th><th>date</th><th>Delete</th><th>Edit</th></tr>
  </thead>
  <tbody>
    <?php
    foreach ($customers as $row) {
      echo '<tr>';
        echo '<td>'.$row['iddelivery'].'</td>';
        echo '<td>'.$row['idBills'].'</td>';
        echo '<td>'.$row['firstname'].'</td>';
        echo '<td>'.$row['lastname'].'</td>';
        echo '<td>'.$row['address'].'</td>';
        echo '<td>'.$row['date'].'</td>';
        echo '<td><a href="'.site_url('admin/delivery/show_delete/').$row['iddelivery'].'">DELETE</a></td>';
        echo '<td><a href="'.site_url('admin/delivery/show_edit/').$row['iddelivery'].'">EDIT</a></td>';
      echo '</tr>';
    }
    ?>
  </tbody>
</table>
