<h2>Delete</h2>
<p>
  Do you want to delete customer: <br>
</p>
<?php
?>
<ul>
  <li><?php echo $chosen_customer[0]['firstname']; ?></li>
  <li><?php echo $chosen_customer[0]['lastname']; ?></li>
</ul>
<a href="<?php echo site_url('admin/delivery/delete_customer/').$chosen_customer[0]['iddelivery']; ?>"><button>DELETE</button></a>
<a href="<?php echo site_url('admin/delivery/show_maindelivery'); ?>"><button>CANCEL</button></a>
