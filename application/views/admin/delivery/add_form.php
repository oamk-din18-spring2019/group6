<h2>Add</h2>
<form class="" action="<?php echo site_url('admin/delivery/add_customer'); ?>" method="post">
  <label for="">Iddelivery</label> <br>
  <input type="number" name="iddelivery" value="" required> <br>

  <label for="">IdBills</label> <br>
  <input type="text" name="idBills" value="" required> <br>

  <label for="">Firstname</label> <br>
  <input type="text" name="firstname" value="" > <br>

  <label for="">Lastname</label> <br>
  <input type="text" name="lastname" value=""> <br>

  <label for="">address</label> <br>
  <input type="text" name="address" value=""> <br>

  <label for="">Date</label> <br>
  <input type="text" name="day" value="<?php echo date('d / m / Y'); ?>"/> <br>


  <input type="submit" name="" value="Add">
</form>
