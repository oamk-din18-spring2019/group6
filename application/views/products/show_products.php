
<div style="display: flex">
  <div style="margin-right: auto;margin-left: auto;">
  <h2>Add Products</h2>
    <form class="" action="<?php echo site_url('products/add_products'); ?>" method="post">
      <div style="display: flex"> 
          <div>
              <p style="padding-top: 4px"><label for="">ID</label></p>
              <p><label for="">Name</label> <br></p>
              <p style="padding-top: 4px"><label for="">Description</label> <br></p>
              <p><label for="">Brand</label> <br></p>
              <p><label for="">Type</label> <br></p>
              <p style="padding-top: 4px"><label for="">Quantity</label> <br></p>
              <p style="padding-top: 4px"><label for="">Price</label> <br></p>
          </div>
          
          <div>
              <p><input type="number" name="id" required> <br> </p>  
              <p><input type="text" name="name" required> <br></p> 
              <p><input type="text" name="des"  required> <br></p>
              <p><input type="text" name="brand"  required> <br></p>
              <p><input type="text" name="type"  required> <br></p>
              <p><input type="number" name="quantity"  min="1" required> <br></p>
              <p><input type="number" name="price" min="1" required> <br></p>
          </div>
      </div>  
        <button type="submit" style="float: right">Add Products</button>
    </form>
  </div>

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
          <th>Price</th>
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
              echo '<td><a href="'.site_url('products/show_delete/').$row['idproducts'].'">DELETE</a></td>';
              echo '<td><a href="'.site_url('products/show_edit/').$row['idproducts'].'">EDIT</a></td>';
            echo '</tr>';
          }
        ?>
      </tbody>
    </table>
  </div>
</div>

