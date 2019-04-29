<header><title>ADMIN - SHOW PRODUCT PAGE</title></header>
<div style="display: flex">
  <div style="margin-right: auto;margin-left: auto;">
  <h2>Add Products</h2>
    <form class="" action="<?php echo site_url('products/add_products'); ?>" method="post">
      <div style="display: flex"> 
          <div>
              <p style="padding-top: 4px"><label>ID</label></p>
              <p><label for="">Name</label> <br></p>
              <p style="padding-top: 4px"><label>Description</label> <br></p>
              <p><label>Brand</label> <br></p>
              <p><label>Type</label> <br></p>
              <p style="padding-top: 4px"><label>Quantity</label> <br></p>
              <p style="padding-top: 4px"><label>Price</label> <br></p>
              <p><label>Image</label></p>
          </div>
          
          <div>
              <p><input type="number" name="id" required> <br> </p>  
              <p><input type="text" name="name" required> <br></p> 
              <p><input type="text" name="des"  required> <br></p>
              <p><input type="text" name="brand" required> <br></p>
              <p><input type="text" name="type"  required> <br></p>
              <p><input type="number" name="quantity"  min="1" required> <br></p>
              <p><input type="number" name="price" min="1" required> <br></p>
              <p><input type="text" name="img" required> <br></p>
          </div>
      </div>  
        <button class="btn btn-primary" type="submit" style="float: right">Add Products</button>
    </form>
  </div>
 

  <!-- open and close buttons in search and show products -->
  <script type="text/javascript">
    function openCloseTable() {
    let getTable  = document.querySelector(".table");
    let getButton = document.querySelector(".button");
    
    if (getTable.innerHTML) 
    {
        getTable.innerHTML  = '<tbody class="table"></tbody>';
        //getButton.innerHTML = '<button class="btn btn-danger" onclick="openCloseTable()">Open Table</button>';
    }
     else 
      {
        getTable.innerHTML  = '<?php

              foreach ($product as $search) 
              {
                echo '<tr>';
                  echo '<td>'.$search['idproducts'].'</td>';
                  echo '<td>'.$search['productName'].'</td>';
                  echo '<td>'.$search['description'].'</td>';
                  echo '<td>'.$search['brand'].'</td>';
                  echo '<td>'.$search['type'].'</td>';
                  echo '<td>'.$search['quantity'].'</td>';
                  echo '<td>'.$search['price'].'</td>';
                  echo '<td><img style="width:100px" src="'.$search['image'].'"/></td>';
                  echo '</tr>';
              }
            ?>';
      //    getButton.innerHTML = 
      //    '<button class="btn btn-danger" onclick="openCloseTable()">Close Table <i class="fas fa-window-close"></i></button>';
       }
}
  </script>
  
 <div style="display: block">
  <div>
    <div class="button" style="text-align: center;">
      <h2>Search Products</h2>
      <button class="btn btn-primary" onclick="openCloseTable()"></button>
    </div>
    
    <div>
      <table border="1" style="width: 1000px">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Brand</th>
            <th>Type</th>
            <th>Quantity</th>
            <th>Price (Euro)</th>
            <th>Image</th>
          </tr>
        </thead>
        <tbody  class="table">
            
        </tbody>
      </table>
    </div>
  </div>

<!-- Show products -->
  <div>
    <h2 style="text-align: center">Show Products</h2>
    <table border="1" style="width: 1000px">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Description</th>
          <th>Brand</th>
          <th>Type</th>
          <th>Quantity</th>
          <th>Price (Euro)</th>
          <th>Image</th>
          <th>Delete</th>
          <th>Edit</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach ($products as $row) 
          {
            echo '<tr>';
              echo '<td>'.$row['idproducts'].'</td>';
              echo '<td>'.$row['productName'].'</td>';
              echo '<td>'.$row['description'].'</td>';
              echo '<td>'.$row['brand'].'</td>';
              echo '<td>'.$row['type'].'</td>';
              echo '<td>'.$row['quantity'].'</td>';
              echo '<td>'.$row['price'].'</td>';
              echo '<td><img style="width:100px" src="'.$row['image'].'"/></td>';
              echo '<td><a href="'.site_url('products/show_delete/').$row['idproducts'].'">DELETE</a></td>';
              echo '<td><a href="'.site_url('products/show_edit/').$row['idproducts'].'">EDIT</a></td>';
            echo '</tr>';
          }
        ?>
      </tbody>
    </table>
  </div>
</div>
</div>

        