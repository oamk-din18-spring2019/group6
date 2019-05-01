<h2>Profile</h2>
<div id="items">
<table class="table">
<?php
foreach ($profile as $row) {
  echo '<tr>';
  echo '<td>username</td>';
  echo '<td>'.$row['username'].'</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>Firstname</td>';
  echo '<td>'.$row['firstname'].'</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>Lastname</td>';
  echo '<td>'.$row['lastname'].'</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>Address</td>';
  echo '<td>'.$row['streetAddress'].'</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>Postal Code</td>';
  echo '<td>'.$row['postalCode'].'</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>Contact</td>';
  echo '<td>'.$row['phoneNumber'].'</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>Email</td>';
  echo '<td>'.$row['email'].'</td>';
  echo '</tr>';
}
    ?>

</table>
<div style="position:absolute;margin-left:30px"><a href="<?php echo site_url('customer/User/show_edit');?>"><button>Edit Profile</button></a></div>
</div>

