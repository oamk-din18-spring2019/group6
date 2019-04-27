<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#000000">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">



    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/category.css')?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <title>ONLINE SHOP</title>
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
									    <li><a href="#">My Account</a></li>
									    <li><a href="#">The Store</a></li>
									    <li class="last"><a href="#">Contact</a></li>
								    </ul>
								</div>
						</div>
						<div id="Button">
							<i onclick="show_previous_picture()" class="fas fa-arrow-alt-circle-left">
							</i>
						</div>
						<div id="Img"><img class="imgHeader" id="image_element_id" src="../images/slide2.jpg"></div>
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
										<li><a href="#">Product A</a></li>
										<li><a href="#">Product B</a></li>
										<li><a href="#">Product C</a></li>
									</ul>
									<form class="navbar-form navbar-left" role="search">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Search">
										</div>
										<button type="submit" class="btn btn-danger">SEARCH</button>
									</form>
									<?php
									if(!empty($_SESSION['user_logged']) && $_SESSION['user_logged']==true){
										echo $_SESSION['username'];
										echo '<div><a href="'.site_url('customer/login/logoutUser').'">Log out</a></div>';
									}
									else {
										echo '<div margin-left:"5px"><a href="'.site_url('customer/home/login').'">Sign in</a></div>';
										echo '<div><a href="'.site_url('customer/home/register').'">Sign up</a></div>';
									}
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
						                            <button type="button" class="btn btn-warning buyButton" style="width:40%">Buy All</button>

						                            <button type="button" class="btn btn-danger clearButton">Clear All</button>
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
