<h2>Edit</h2>
<form class="" action="<?php echo site_url('admin/delivery/edit_delivery'); ?>" method="post">
  <label for="">iddelivery</label> <br>
  <input type="number" name="iddelivery" value="<?php echo $customer[0]['iddelivery']; ?>" > <br>
  <label for="">idBills</label> <br>
  <input type="number" name="idBills" value="<?php echo $customer[0]['idBills']; ?>" > <br>
  <label for="">firstname</label> <br>
  <input type="text" name="firstname" value="<?php echo $customer[0]['firstname']; ?>" required> <br>

  <label for="">lastname</label> <br>
  <input type="text" name="lastname" value="<?php echo $customer[0]['lastname']; ?>" required> <br>

  <label for="">address</label> <br>
  <input type="text" name="address" value="<?php echo $customer[0]['address']; ?>"> <br>

  <label for="">date</label> <br>
  <input type="text" name="date" value="<?php echo $customer[0]['date']; ?>"> <br>

  <input type="hidden" name="current_id" value="<?php echo $current_id; ?>">
  <input type="submit" name="" value="Save">
</form>
