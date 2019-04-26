<h2>Add form</h2>
<form class="" action="<?php echo site_url('admin/delivery/add_customer'); ?>" method="post">
  <label for="">iddelivery</label> <br>
  <input type="number" name="iddelivery" value="" required> <br>

  <label for="">idBills</label> <br>
  <input type="text" name="idBills" value="" required> <br>

  <label for="">firstname</label> <br>
  <input type="text" name="firstname" value="" > <br>

  <label for="">lastname</label> <br>
  <input type="text" name="lastname" value=""> <br>

  <label for="">streetAdress</label> <br>
  <input type="text" name="streetAdress" value=""> <br>

  <label for="">date</label> <br>
  <input type="text" name="day" value="<?php echo date('d / m / Y'); ?>"/> <br>

  <input type="submit" name="" value="Add">
</form>
