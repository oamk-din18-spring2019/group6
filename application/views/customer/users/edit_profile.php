<div style="width: 50%;margin-right: auto;margin-left: auto;float: center;/* text-align: center; */padding-left: 40%;">
	<h2>Edit Profile</h2>
	<form class="" action="<?php echo site_url('customer/User/edit_profile'); ?>" method="post">
	    <div style="display: flex"> 
	        <div>
              <p><label for="">Firstname</label> <br></p>
              <p style="padding-top: 4px"><label for="">Lastname</label> <br></p>
              <p><label for="">Address</label> <br></p>
              <p><label for="">Postal Code</label> <br></p>
              <p style="padding-top: 4px"><label for="">Phone Number</label> <br></p>
              <p style="padding-top: 4px"><label for="">Email</label> <br></p>
	        </div>
	          
	        <div>  
	            <p><input type="text" name="firstname" value="<?php echo $editProfile[0]['firstname']; ?>"> <br></p> 
	            <p><input type="text" name="lastname" value="<?php echo $editProfile[0]['lastname']; ?>"> <br></p>
	            <p><input type="text" name="streetAddress"  value="<?php echo $editProfile[0]['streetAddress']; ?>"> <br></p>
				<p><input type="text" name="postalCode" value="<?php echo $editProfile[0]['postalCode']; ?>"> <br></p>
				<p><input type="text" name="phoneNumber" value="<?php echo $editProfile[0]['phoneNumber']; ?>"> <br></p>
				<p><input type="email" name="email" value="<?php echo $editProfile[0]['email']; ?>"> <br></p>
	            
	        </div>
	    </div>  
	        <button type="submit">SAVE</button>
	        <a href="<?php echo site_url('customer/User/show_profile'); ?>"><button>CANCEL</button></a>
	</form>
</div>
	