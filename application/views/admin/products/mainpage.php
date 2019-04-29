  <header><title>MAIN PAGE</title></header>
    <!--.body-->
  <div class="wrapper-bodyfooter">
    <hr>

    <div class="left-bar">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Sidebar</h3>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-briefcase"></i>
                        About
                    </a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Pages
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </nav>
    </div>
    <div class="form">
        <div class="form-popup" id="signin">
          <form class="form-container" id="signin" action="<?php echo site_url('users/login'); ?>" method="post">
            <h1  style="text-align: center">Login</h1>
              <hr>
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username..." name="username" required>
        
            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password..." name="password" required>
            <button type="submit" class="btn">Sign In</button>
            <button type="button" class="btn" onclick="openFormSignUp()">Sign Up</button>
            <button type="button" class="btn cancel" onclick="closeFormSignIn()">Close</button>
          </form>
        </div>

        <!-- form sign up -->
        <div class="form-popup" id="signup">
          <form class="form-container" action="<?php echo site_url('users/add_users'); ?>" method="post">
            <h1 style="text-align: center">Register</h1>
              <hr>
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username..." name="user" required>
            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password..." name="pass" required>
            <label><b>Email</b></label>
            <input type="text" placeholder="Enter Email..." name="email" required>
        
            <button type="submit" class="btn">Register</button>
            <button type="button" class="btn cancel" onclick="closeFormSignUp()">Close</button>
          </form>
        </div>
      </div>
    <div class="items">
        <div class="productRow">
          <?php
            foreach ($products as $print)
            { 
              echo'<div id="show_0">';
                //echo'<tr>'; 
                  echo'<p class="image"><img style="width:200px" src="'.$print['image'].'"/></p>';
                  echo '<p class="name">'.$print['productName'].'</p>';  
                  echo '<p class="text">'.$print['description'].'</p>';
                  echo '<p class="price">'.$print['price'].'</p>';  
                  echo '<p>
                          <button type="button" class="btn btn-primary cartButton" data-id="'.$print['idproducts'].'">ADD TO CART</button>
                        </p>';
                //echo'</tr>';    
              echo '</div>';
            } 
          ?>
        </div>
      </div>
    </div>
          <!-- print 3 products in one row -->
      <!-- <script>
        document.addEventListener('DOMContentLoaded', myFunction());
        row_nr=0; 
        

        // function myFunction() 
        // {
        //     /*var table = document.querySelector('.items');
        //     var row = document.querySelector('#show_'+row_nr); 
        //     var cell = row.insertCell(col_nr);
        //     cell.innerHTML = row_nr+","+col_nr;
        //     col_nr++;
        //     if (col_nr %3==0) {
        //     col_nr=0;
        //     row_nr++;
        //     var row = table.insertRow(row_nr);
        //     row.setAttribute("id", "row_"+row_nr);
        //     }*/
        //     col_nr=1;
        //     let a = '#show_0:nth-child(' + col_nr + ')';       
        //     var row = document.querySelector(a); //row = show_0
        //     while(row != null) {
        //         if(col_nr % 3 == 0) {
        //           // row.target.classList.appendChild();
        //           var newItem = document.createElement("br"); 
        //           console.log(row.parentElement); 
        //           row.parentElement[0].appendChild(newItem);  
        //         }
        //         col_nr++;
        //         a = '#show_0:nth-child(' + col_nr + ')';       
        //         row = document.querySelector(a);
        //         console.log(123);
        //     }

            //<br>items['col_nr=3']</br> product 3 
  // 1 show là 1 product
  // 1 row là chứa 3 col/show
  // row = show = product;
  // row.parent =>items  + br tai vị trí %3,
  // 10 products => items
  // row div bao bộc 3 products => index =0
  // col bao bọc 1 product
  // => col % 3 => row ++

  // display của thg items = block
  // block chứa nhiều thg rows
  // row display flex
        }
      close  products row -->   


    



    
    <!-- <script type="text/javascript">
    $(document).ready(function () {
        $('#dismiss, .overlay').on('click', function () {
            // hide sidebar
            $('#sidebar').removeClass('active');
            // hide overlay
            $('.overlay').removeClass('active');
        });
    
        $('#showSidebar').on('click', function () {
            // open sidebar
            $('#sidebar,.items').addClass('active');
            // fade in the overlay
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
    </script> -->
<script src="http://[::1]/ProjectPHP/public/js/index.js"></script>  
<script src="http://[::1]/ProjectPHP/public/js/logform.js"></script> 



          