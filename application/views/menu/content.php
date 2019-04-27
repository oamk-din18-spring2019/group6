
<?php $this->load->view('menu/header'); ?>
<div id="sidebar-left">
  <div class="middle">
    <div class="menu">
      <li class="item" id="profile">
        <a href="#profile" class="btn">Profile</a>
        <div class="smenu">
          <a href="#">Posts</a>
          <a href="#">Picture</a>
        </div>
      </li>

      <li class="item" id="profile1">
        <a href="#profile1" class="btn">Profile</a>
        <div class="smenu">
          <a href="#">Posts</a>
          <a href="#">Picture</a>
        </div>
      </li>

      <li class="item" id="Delivery">
        <a href="#Delivery" class="btn">Delivery</a>
        <div class="smenu">
          <a href="<?php echo site_url('admin/delivery/show_maindelivery'); ?>">Show Delivery</a>
          <a href="<?php echo site_url('admin/delivery/add_form'); ?>">Add Form</a>
        </div>
      </li>

      <li class="item" id="profile3">
        <a href="#profile3" class="btn">Logout</a>
      </li>


    </div>
  </div>
</div>
<div id="main"><p><?php $this->load->view($page); ?></p></div>
<?php $this->load->view('menu/footer'); ?>
