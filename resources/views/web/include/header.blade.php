<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>{{ config('app.name') }}</title>

  <!-- Mobile specific metas  -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon  -->
  <link rel="shortcut icon" type="image/x-icon" href="web/images/fab.png">

  <!-- CSS Style -->
  <link rel="stylesheet" href="web/css/link-style.css">
  <link rel="stylesheet" href="">
  @stack('css')
  @stack('seo')
</head>

<body class="cms-index-index cms-home-page">
  <!-- mobile menu -->
  <div id="jtv-mobile-menu">
    <ul>
      <li>
        <div class="jtv-search-mob">
          <form id="search1" name="search">
            <div class="input-group">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
              </div>
              <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
            </div>
          </form>
        </div>
      </li>
      <li><a href="index.html">Home</a></li>
      <li><a href="#">Pages</a>
        <ul>
          <li><a href="shop_grid.html"><span>Shop Grid</span></a>
            <ul>
              <li> <a href="shop_grid_right.html"> <span>Shop Grid Right Sidebar</span> </a> </li>
              <li> <a href="shop_grid_fullwidth.html"> <span>Shop Grid Fullwidth</span> </a> </li>
            </ul>
          </li>
          <li> <a href="shop_list.html"> <span>Shop List</span> </a>
            <ul>
              <li> <a href="shop_list_right.html"> <span>Shop List Right Sidebar</span> </a> </li>
            </ul>
          </li>
          <li> <a href="single_product.html"> <span>Single Product</span> </a> </li>
          <li> <a href="shopping_cart.html"> <span>Shopping Cart</span> </a> </li>
          <li><a href="checkout.html"><span>Checkout</span></a> </li>
          <li> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
          <li><a href="compare.html"><span>Compare</span></a> </li>
          <li><a href="quick_view.html"><span>Quick View</span></a> </li>
          <li><a href="404error.html"><span>404 Error Page</span></a> </li>
        </ul>
      </li>
      <li><a href="#">Clutches</a>
        <ul>
          <li> <a href="shop_grid.html"><span>tassel saddle bag</span></a>
            <ul>
              <li> <a href="shop_grid.html"><span>Toaster Crossbody</span></a> </li>
              <li> <a href="shop_grid.html"><span>Piper Bag</span></a> </li>
              <li> <a href="shop_grid.html"><span>Leather Bag</span></a> </li>
              <li> <a href="shop_grid.html"><span>Canvas Bag</span></a> </li>
            </ul>
          </li>
          <li> <a href="shop_grid.html"><span>bucket bag</span></a>
            <ul>
              <li> <a href="shop_grid.html"><span>Travel Accessories</span></a> </li>
              <li> <a href="shop_grid.html"><span>Gym Bags</span></a> </li>
              <li> <a href="shop_grid.html"><span>Fashion Waist Packs</span></a> </li>
              <li> <a href="shop_grid.html"><span>Messenger Bags</span></a> </li>
            </ul>
          </li>
          <li> <a href="shop_grid.html"><span>saddle bag</span></a>
            <ul>
              <li> <a href="shop_grid.html"><span>Travel Duffels</span></a> </li>
              <li> <a href="shop_grid.html"><span>Umbrellas</span></a> </li>
              <li> <a href="shop_grid.html"><span>Waist Packs</span></a> </li>
              <li> <a href="shop_grid.html"><span>Travel Gear</span></a> </li>
            </ul>
          </li>
          <li> <a href="shop_grid.html"><span>curved boxy sling</span></a>
            <ul>
              <li> <a href="shop_grid.html"><span>Luggage</span></a> </li>
              <li> <a href="shop_grid.html"><span>Briefcases</span></a> </li>
              <li> <a href="shop_grid.html"><span>Bowling</span></a> </li>
              <li> <a href="shop_grid.html"><span>Bucket Bag</span></a> </li>
            </ul>
          </li>
          <li> <a href="shop_grid.html"><span>floral lattice bag</span></a>
            <ul>
              <li> <a href="shop_grid.html"><span>Crossbody Bag</span></a> </li>
              <li> <a href="shop_grid.html"><span>Clutch Handbag</span></a> </li>
              <li> <a href="shop_grid.html"><span>Hobo Shoulder</span></a> </li>
              <li> <a href="shop_grid.html"><span>Saddle Bag</span></a> </li>
            </ul>
          </li>
          <li> <a href="shop_grid.html"><span>Bag Accessories</span></a>
            <ul>
              <li> <a href="shop_grid.html"><span>Wallet Wristlet</span></a> </li>
              <li> <a href="shop_grid.html"><span>Solo Premium </span></a> </li>
              <li> <a href="shop_grid.html"><span>Laptop Bags</span></a> </li>
              <li> <a href="shop_grid.html"><span>Belts</span></a> </li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="shop_grid.html">Handbags</a>
        <ul>
          <li> <a href="shop_grid.html"><span>Steve Madden</span></a>
            <ul>
              <li> <a href="shop_grid.html"><span>Elegant </span></a> </li>
              <li> <a href="shop_grid.html"><span>sassy &amp; chic</span></a> </li>
              <li> <a href="shop_grid.html"><span>Women's Satchel</span></a> </li>
              <li> <a href="shop_grid.html"><span>Shoulder Bag</span></a> </li>
            </ul>
          </li>
          <li> <a href="shop_grid.html"><span>College Bags</span></a>
            <ul>
              <li> <a href="shop_grid.html"><span>fashion Backpack</span></a> </li>
              <li> <a href="shop_grid.html"><span>Rose Gold Saffiano</span></a> </li>
              <li> <a href="shop_grid.html"><span>Black Velvet</span></a> </li>
              <li> <a href="shop_grid.html"><span>Leather Handbags</span></a> </li>
            </ul>
          </li>
          <li> <a href="shop_grid.html"><span>Material Bag</span></a>
            <ul>
              <li> <a href="shop_grid.html"><span>Sling Bag</span></a> </li>
              <li> <a href="shop_grid.html"><span>Diaper Bags</span></a> </li>
              <li> <a href="shop_grid.html"><span>Laptop Backpack</span></a> </li>
              <li> <a href="shop_grid.html"><span>Benetton Black </span></a> </li>
            </ul>
          </li>
          <li> <a href="shop_grid.html"><span>Lino Perros</span></a>
            <ul>
              <li> <a href="shop_grid.html"><span>Graphite Croco</span></a> </li>
              <li> <a href="shop_grid.html"><span>Swiss Military Red</span></a> </li>
              <li> <a href="shop_grid.html"><span>Hidesign</span></a> </li>
              <li> <a href="shop_grid.html"><span>Benetton</span></a> </li>
            </ul>
          </li>
          <li> <a href="shop_grid.html"><span>Aquatan</span></a>
            <ul>
              <li> <a href="shop_grid.html"><span>Travel Blue</span></a> </li>
              <li> <a href="shop_grid.html"><span>Charles & Keith</span></a> </li>
              <li> <a href="shop_grid.html"><span>Clutches</span></a> </li>
              <li> <a href="shop_grid.html"><span>wristlets</span></a> </li>
            </ul>
          </li>
          <li> <a href="shop_grid.html"><span>Kenneth Cole</span></a>
            <ul>
              <li> <a href="shop_grid.html"><span>wallets</span></a> </li>
              <li> <a href="shop_grid.html"><span>shoulder bags</span></a> </li>
              <li> <a href="shop_grid.html"><span>leather totes</span></a> </li>
              <li> <a href="shop_grid.html"><span>satchels</span></a> </li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="shop_grid.html">Laptop bags</a> </li>
      <li><a href="shop_grid.html">Furniture</a> </li>
      <li><a href="shop_grid.html">Luggage</a> </li>
      <li><a href="contact-us.html">Backpacks</a> </li>
    </ul>
    <div class="jtv-top-link-mob">
      <ul class="links">
        <li><a title="My Account" href="account_page.html">My Account</a> </li>
        <li><a title="Wishlist" href="wishlist.html">Wishlist</a> </li>
        <li><a title="Checkout" href="checkout.html">Checkout</a> </li>
        <li><a title="Blog" href="blog.html"><span>Blog</span></a> </li>
        <li class="last"><a title="Login" href="account_page.html"><span>Login</span></a> </li>
      </ul>
    </div>
  </div>
  <!-- end mobile menu -->

  <div id="page"> 
    
    <!-- Header -->
    <header>
      <div class="header-container">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 hidden-xs">
              <div class="search-box">
                <form action="http://htmlmystore.justthemevalley.com/bigstart/cat" method="POST" id="search_mini_form" name="Categories">
                  <input type="text" placeholder="Search entire store here..." value="Search" maxlength="70" name="search" id="search">
                  <button type="button" class="search-btn-bg"><span class="glyphicon glyphicon-search"></span>&nbsp;</button>
                </form>
              </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-11 jtv-logo-box"> 
              <!-- Header Logo -->
              <div class="logo"> <a title="eCommerce" href="index.php"><h1>credence ever llpp</h1> </a> </div>
              <!-- End Header Logo --> 
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-1">
              <div class="jtv-top-cart-box"> 
                <!-- Top Cart -->
                <div class="mini-cart">
                  <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="shopping_cart.html"> <span class="cart_count">12</span></a> </div>
                  <div>
                    <div class="jtv-top-cart-content"> 
                      
                      
                      <ul class="mini-products-list" id="cart-sidebar">
                        <li class="item first">
                          <div class="item-inner"> <a class="product-image" title="Product Title Here" ref="#"><img alt="Product Title Here" src="{{ asset('web/images/products/img01.jpg') }}"> </a>
                            <div class="product-details">
                              <div class="access"><a class="jtv-btn-remove" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                              <p class="product-name"><a href="#">Product Title Here</a> </p>
                              <strong>1</strong> x <span class="price">$79.99</span> </div>
                          </div>
                        </li>
                        <li class="item">
                          <div class="item-inner"> <a class="product-image" title="Product Title Here" ref="single_product.html"><img alt="Product Title Here" src="{{ asset('web/images/products/img02.jpg') }}"> </a>
                            <div class="product-details">
                              <div class="access"><a class="jtv-btn-remove" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                              <p class="product-name"><a href="#">Product Title Here</a> </p>
                              <strong>1</strong> x <span class="price">$88.89</span> </div>
                          </div>
                        </li>
                        <li class="item last">
                          <div class="item-inner"> <a class="product-image" title="Product Title Here" ref="single_product.html"><img alt="Product Title Here" src="{{ asset('web/images/products/img04.jpg') }}"> </a>
                            <div class="product-details">
                              <div class="access"><a class="jtv-btn-remove" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                              <p class="product-name"><a href="#">Product Title Here</a> </p>
                              <strong>1</strong> x <span class="price">$85.99</span> </div>
                          </div>
                        </li>
                      </ul>
                      
                      
                      <div class="actions">
                        <button class="btn-checkout" title="Checkout" type="button" onClick="checkout.html"><span>Checkout</span> </button>
                        <a href="shopping_cart.html" class="view-cart"><span>View Cart</span></a> </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="jtv-top-cart-box hidden-xs"> 
                <!-- Top Wishlist -->
                <div class="mini-cart">
                  <div class="basket1"> <a href="wishlist.php"> <span class="cart_count">2</span></a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header --> 
    
    <!-- Navigation -->  
    <div class="desktop-nav">
      <nav>
        <div class="container">
          <div class="mm-toggle-wrap">
            <div class="mm-toggle"><i class="fa fa-align-justify"></i><span class="mm-label">Menu</span> </div>
          </div>
          <div class="nav-inner"> 
            <!-- BEGIN NAV -->          
            <ul class="menu">
              <li>Shop by Category</li>
              <li>
                <h3>Books</h3>
                <div>
                  <h4>Books</h4>
                  <span class="sub-menu">                    
                    <ul>
                      <li><a href="#">English</a></li>
                      <li><a href="#">Dutch</a></li>
                      <li><a href="#">German</a></li>
                      <li><a href="#">French</a></li>
                      <li><a href="#">Spanish</a></li>
                      <li><a href="#">Turkish</a></li>
                      <li><a href="#">Arabic</a></li>
                    </ul>
                  </span>
                  <span class="sub-menu">     
                    <img src="web/images/menu-img4.jpg" alt="">
                  </span>
                </div>
              </li>
              <li>
                <h3>Computer & Electronics</h3>
                <div>
                  <h4>Books</h4>
                  <span class="sub-menu">                    
                    <ul>
                      <li><a href="#">English</a></li>
                      <li><a href="#">Dutch</a></li>
                      <li><a href="#">German</a></li>
                      <li><a href="#">French</a></li>
                      <li><a href="#">Spanish</a></li>
                      <li><a href="#">Turkish</a></li>
                      <li><a href="#">Arabic</a></li>
                      <li><a href="#">German</a></li>
                      <li><a href="#">French</a></li>
                      <li><a href="#">Spanish</a></li>
                      <li><a href="#">Turkish</a></li>
                      <li><a href="#">Arabic</a></li>
                    </ul>
                  </span>
                  <span class="sub-menu">     
                    <img src="web/images/menu-img3.jpg" alt="">
                  </span>
                </div>
              </li>
              <li>
                <h3>Toys</h3>
                <div>
                  <h4>Brands</h4>
                </div>
              </li>	
              <li>
                <h3>Sport & Leisure</h3>
                <div>
                  <h4>Sport</h4>
                </div>
              </li>
              <li>
                <h3>Home & Cooking</h3>
                <div>
                  <h4>Cooking</h4>
                </div>
              </li>	
              <li>
                <h3>Garden & DIY</h3>
                <div>
                  <h4>Garden</h4>
                </div>
              </li>
              
              <li>
                <h3>Computer & Electronics</h3>
                <div>
                  <h4>Smartphones</h4>
                </div>
              </li>
              <li>
                <h3>Toys</h3>
                <div>
                  <h4>Brands</h4>
                </div>
              </li>	
              <li>
                <h3>Sport & Leisure</h3>
                <div>
                  <h4>Sport</h4>
                </div>
              </li>
              <li>
                <h3>Home & Cooking</h3>
                <div>
                  <h4>Cooking</h4>
                </div>
              </li>	
              <li>
                <h3>Garden & DIY</h3>
                <div>
                  <h4>Garden</h4>
                </div>
              </li>
              
            </ul>
            
            <ul class="temp">
              <li><a href="#">Home</a></li>
              <li><a href="#">Fashion Store</a></li>
              <li><a href="#">Login</a></li>
              <li><a href="#">Register</a></li>
              <li><a href="#"><i class="icon-user icons"></i>  Hello, Vishal</a></li>
            </ul>

          </div>
        </div>
      </nav>
    </div>
    <!-- end nav --> 
