<?php
foreach($items as $row)
{
echo '<tr>';
  echo '<td>'.$row['idproducts'].'</td>';
  echo '<td>'.$row['productName'].'</td>';
  echo '<td>'.$row['description'].'</td>';
  echo '<td>'.$row['brand'].'</td>';
  echo '<td>'.$row['type'].'</td>';
  echo '<td>'.$row['price'].'</td>';

echo '</tr>';

}

?>
