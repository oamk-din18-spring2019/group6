<h2>Add<h2>
  <form class="" action="<?php echo site_url('Bills/add_bill'); ?>" method="post">
    <label for="">Bill ID</label> <br>
    <input type="number" name="idb" value=""> <br>
    <label for="">Customer ID</label> <br>
    <input type="number" name="idc" value=""> <br>

    <label for="">Firstname</label> <br>
    <input type="text" name="fn" value="" required> <br>

    <label for="">Lastname</label> <br>
    <input type="text" name="ln" value="" required> <br>

    <label for="">Product ID</label> <br>
    <input type="number" name="idp" value=""> <br>
    <label for="">Product name</label> <br>
    <input type="text" name="pn" value="" > <br>
    <label for="">Amount</label> <br>
    <input type="number" name="amount" value=""> <br>
    <label for="">Total of money</label> <br>
    <input type="number" name="total" value=""> <br>

    <input type="submit" name="" value="Add">
  </form>
