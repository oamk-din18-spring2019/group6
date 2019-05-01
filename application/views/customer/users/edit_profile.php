
	<h2>Edit Profile</h2>
	
	<form class="" action="<?php echo site_url('customer/User/edit_profile'); ?>" method="post">
	    <div>
		    <div>
              <label for="">Firstname</label>
			  <input type="text" name="firstname" value="<?php echo $editProfile[0]['firstname']; ?>" style="margin-left:52px;text-align:center;" > <br> 
              <label for="">Lastname</label> 
			  <input type="text" name="lastname" value="<?php echo $editProfile[0]['lastname']; ?>" style="margin-left:54px;text-align:center;"> <br>
              <label for="">Address</label> 
			  <input type="text" name="streetAddress" value="<?php echo $editProfile[0]['streetAddress'];?>" style="margin-left:63px;text-align:center;"> <br>
              <label for="">Postal Code</label> 
			  <input type="text" name="postalCode" value="<?php echo $editProfile[0]['postalCode']; ?>" style="margin-left:38px;text-align:center;"> <br>
              <label for="">Phone Number</label> 
			  <input type="text" name="phoneNumber" value="<?php echo $editProfile[0]['phoneNumber']; ?>" style="margin-left:20px;text-align:center;"> <br>
              <label for="">Email</label> 
			  <input type="email" name="email" value="<?php echo $editProfile[0]['email']; ?>" style="margin-left:82px;text-align:center;"> 
	       </div>
		</div>
	        <button type="submit">SAVE</button>
			<a href="<?php echo site_url('customer/User/show_profile'); ?>"><button>CANCEL</button></a>
	</form>
	

	