<h2>Edit Delivery</h2>
<?php print_r($customer); ?>
<form class="" action="<?php echo site_url('admin/delivery/edit_delivery'); ?>" method="post">
  <label for="">iddelivery</label> <br>
  <input type="number" name="iddelivery" value="<?php echo $customer[0]['iddelivery']; ?>" > <br>
  <label for="">idBills</label> <br>
  <input type="number" name="idBills" value="<?php echo $customer[0]['idBills']; ?>" > <br>
  <label for="">firstname</label> <br>
  <input type="text" name="firstname" value="<?php echo $customer[0]['firstname']; ?>" required> <br>

  <label for="">lastname</label> <br>
  <input type="text" name="lastname" value="<?php echo $customer[0]['lastname']; ?>" required> <br>

  <label for="">streetAdress</label> <br>
  <input type="text" name="streetAdress" value="<?php echo $customer[0]['streetAdress']; ?>"> <br>

  <label for="">day</label> <br>
  <input type="text" name="day" value="<?php echo $customer[0]['day']; ?>"> <br>

  <input type="hidden" name="current_id" value="<?php echo $current_id; ?>">
  <input type="submit" name="" value="Save">
</form>
