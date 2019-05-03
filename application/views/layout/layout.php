
<?php $this->load->view('layout/header'); ?>
<div id="sidebar-left">
  <div class="middle">
    <div class="menu">
      <li class="item" id="profile">
        <a href="#profile" class="btn"><i class="far fa-user"></i>Profile</a>
        <div class="smenu">
          <a href="<?php echo site_url('admin/customer/show_customer') ?>">Show customer</a>
        </div>
      </li>

      <li class="item" id="Product">
        <a href="#Product" class="btn"><i class="fab fa-product-hunt"></i>Product</a>
        <div class="smenu">
          <a href="<?php echo site_url('admin/products/show_products') ?>">Product</a>
          <a href="<?php echo site_url('admin/products/add_form') ?>">Add</a>
        </div>
      </li>

      <li class="item" id="Bill">
        <a href="#Bill" class="btn"><i class="fas fa-file-invoice-dollar"></i>Bill</a>
        <div class="smenu">
          <a href="<?php echo site_url('admin/bills/show_bills') ?>">Bill</a>
        </div>
      </li>


      <li class="item" id="Delivery">
        <a href="#Delivery" class="btn"><i class="fas fa-truck"></i>Delivery</a>
        <div class="smenu">
          <a href="<?php echo site_url('admin/delivery/show_maindelivery'); ?>">Show Delivery</a>
          <a href="<?php echo site_url('admin/delivery/add_form'); ?>">Add Form</a>
        </div>
      </li>

      <li class="item" id="Logout">
        <a href="#Logout" class="btn"><i class="fas fa-sign-out-alt"></i>Logout</a>
      </li>


    </div>
  </div>
</div>
<div id="main">
  <?php $this->load->view($page); ?>
</div>
<?php $this->load->view('layout/footer'); ?>
