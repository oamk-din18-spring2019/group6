<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#000000">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    
    <link rel="stylesheet" type="text/css" href="http://[::1]/ProjectPHP/public/css/index.css">
    <link rel="stylesheet" type="text/css" href="http://[::1]/ProjectPHP/public/css/log.css">



    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



  </head>
  <body>
    <!--.header-->
    <div class="wrapper">
      <div class="view-range">
        <div class="header">
          <div class="header-main">
            <div class="header-content">
              <h1 id="logo"><a href="#">Urgan Gear</a></h1>
                <div id="navigation">
                    <ul>
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Support</a></li>
                      <li><a class="open-button" onclick="openFormSignIn()">My Account</a></li>
                      <li><a href="#">The Store</a></li>
                      <li class="last"><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div id="Button">                 
              <i onclick="show_previous_picture()" class="fas fa-arrow-alt-circle-left">
              </i>
            </div>
            <div id="Img"><img class="imgHeader" id="image_element_id" src="http://[::1]/ProjectPHP/public/images/slide2.jpg"></div>
            <div id="Button">
              <i onclick="show_next_picture()" class="fas fa-arrow-alt-circle-right">   
              </i>
            </div>
          </div>
          </div>
          <div class="menu">
            <nav class="navbar navbar-default" role="navigation">
              <div class="container-fluid" style="display: flex">
                <div class="navbar-header" id="menucart">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <ul class="nav navbar-nav">
                    <li><button type="button" id="showSidebar" class="btn btn-info">
                                <i class="fas fa-align-left"></i>
                                <span>Toggle Sidebar</span>
                              </button></li>
                    <li><a href="<?php echo site_url('products/mainpage'); ?>">MAIN PAGE</a></li>
                    <li><a href="<?php echo site_url('users/show_users'); ?>">USER</a></li>
                    <li><a href="<?php echo site_url('products/show_products'); ?>">PRODUCT</a></li>
                  </ul>
                  <form class="navbar-form navbar-left" role="search" action="<?php echo site_url('products/show_products'); ?>" method="post">
                    <div class="form-group">
                      <input type="text" name="search" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-danger">SEARCH</button>
                  </form>
                    <?php 
                      if(!empty($_SESSION['logged_in']) &&$_SESSION['logged_in']==true)
                      {
                        echo '<h3>Welcome :<h2><b>'.$_SESSION['username'].' </h2></h3>';
                        // echo '<button onclick="logout()">Log Out</button>';
                        echo '<button type="button" action="'. site_url('users/logout').'">Log Out</button>';
                      }
                      else { echo "<h3>CLICK MyAccount TO LOG IN</h3>";}
                     ?> 
                </div>
                  <div class="cart">
                    <ul class="nav navbar-nav navbar-right">
                                    <li class="cart-Menu">
                                      <i class="fas fa-cart-plus" id="cart-Img"></i>
                                      <div id="cart-Content">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Price</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody id="insideCart"></tbody>
                                        </table>
                                        <hr>
                                        <div>
                                          <a type="button" class="btn btn-warning buyButton" style="width:40%" href="<?php echo site_url('products/chosen_products'); ?>">Buy All</a>

                                          <button type="button" class="btn btn-danger clearButton" >Clear All</button>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                </div>
              </div>
            </nav>
          </div>

        </div>
      </div>
<script type="text/javascript">
  function logout()
  {
    <?php echo site_url('users/logout'); ?>
  }
</script>
<script>

var  picture_file_names  = [ "http://[::1]/ProjectPHP/public/images/slide1.jpg",
                             "http://[::1]/ProjectPHP/public/images/slide2.jpg"] ;
var  picture_index = 0 ;
function show_next_picture()
{
   picture_index ++ ;
   if ( picture_index >= picture_file_names.length )
   {
      picture_index = 0 ;
   }
   var image_element = document.getElementById( "image_element_id" ) ;
   image_element.src = picture_file_names[ picture_index ] ;
}
function show_previous_picture()
{
   picture_index -- ;

   if ( picture_index < 0 )
   {
      picture_index = picture_file_names.length - 1 ;
   }
   var image_element = document.querySelector( '#image_element_id' ) ;
   image_element.src = picture_file_names[ picture_index ] ;
}
</script>    
 