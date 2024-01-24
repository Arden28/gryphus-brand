<!DOCTYPE html>
<html lang="en">


    <!--  09 Nov 2023 09:57:25 GMT -->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title') | Gryphus Brand</title>
        @include('includes.main-css')
    </head>

    <body>
        <div class="page-wrapper">
            <header class="header">
                <div class="header-top">
                    <div class="container">
                        <div class="header-left">
                            <div class="header-dropdown">
                                <a href="#">Usd</a>
                                <div class="header-menu">
                                    <ul>
                                        <li><a href="#">Eur</a></li>
                                        <li><a href="#">Usd</a></li>
                                    </ul>
                                </div><!-- End .header-menu -->
                            </div><!-- End .header-dropdown -->

                            <div class="header-dropdown">
                                <a href="#">Eng</a>
                                <div class="header-menu">
                                    <ul>
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                    </ul>
                                </div><!-- End .header-menu -->
                            </div><!-- End .header-dropdown -->
                        </div><!-- End .header-left -->

                        <div class="header-right">
                            <ul class="top-menu">
                                <li>
                                    <a href="#">Links</a>
                                    <ul>
                                        <li><a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a></li>
                                        <li><a href="wishlist.html"><i class="icon-heart-o"></i>Wishlist <span>(3)</span></a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li>
                                    </ul>
                                </li>
                            </ul><!-- End .top-menu -->
                        </div><!-- End .header-right -->
                    </div><!-- End .container -->
                </div><!-- End .header-top -->

                <div class="header-middle sticky-header">
                    <div class="container">
                        <div class="header-left">
                            <button class="mobile-menu-toggler">
                                <span class="sr-only">Toggle mobile menu</span>
                                <i class="icon-bars"></i>
                            </button>

                            <a href="index.html" class="logo">
                                <img src="assets/images/logo.png" alt="Molla Logo" width="105" height="25">
                            </a>

                            <nav class="main-nav">
                                <ul class="menu sf-arrows">
                                    <li class="megamenu-container active">
                                        <a href="index.html" class="sf-with-ul">Home</a>

                                        <div class="megamenu demo">
                                            <div class="menu-col">
                                                <div class="menu-title">Choose your demo</div><!-- End .menu-title -->

                                                <div class="demo-list">
                                                    <div class="demo-item">
                                                        <a href="index-1.html">
                                                            <span class="demo-bg" style="background-image: url(assets/images/menu/demos/1.jpg);"></span>
                                                            <span class="demo-title">01 - furniture store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->

                                                    <div class="demo-item">
                                                        <a href="index-2.html">
                                                            <span class="demo-bg" style="background-image: url(assets/images/menu/demos/2.jpg);"></span>
                                                            <span class="demo-title">02 - furniture store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->

                                                    <div class="demo-item">
                                                        <a href="index-3.html">
                                                            <span class="demo-bg" style="background-image: url(assets/images/menu/demos/3.jpg);"></span>
                                                            <span class="demo-title">03 - electronic store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->

                                                    <div class="demo-item">
                                                        <a href="index-4.html">
                                                            <span class="demo-bg" style="background-image: url(assets/images/menu/demos/4.jpg);"></span>
                                                            <span class="demo-title">04 - electronic store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->

                                                    <div class="demo-item">
                                                        <a href="index-5.html">
                                                            <span class="demo-bg" style="background-image: url(assets/images/menu/demos/5.jpg);"></span>
                                                            <span class="demo-title">05 - fashion store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->

                                                    <div class="demo-item">
                                                        <a href="index-6.html">
                                                            <span class="demo-bg" style="background-image: url(assets/images/menu/demos/6.jpg);"></span>
                                                            <span class="demo-title">06 - fashion store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->

                                                    <div class="demo-item">
                                                        <a href="index-7.html">
                                                            <span class="demo-bg" style="background-image: url(assets/images/menu/demos/7.jpg);"></span>
                                                            <span class="demo-title">07 - fashion store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->

                                                    <div class="demo-item">
                                                        <a href="index-8.html">
                                                            <span class="demo-bg" style="background-image: url(assets/images/menu/demos/8.jpg);"></span>
                                                            <span class="demo-title">08 - fashion store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->

                                                    <div class="demo-item">
                                                        <a href="index-9.html">
                                                            <span class="demo-bg" style="background-image: url(assets/images/menu/demos/9.jpg);"></span>
                                                            <span class="demo-title">09 - fashion store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->

                                                    <div class="demo-item">
                                                        <a href="index-10.html">
                                                            <span class="demo-bg" style="background-image: url(assets/images/menu/demos/10.jpg);"></span>
                                                            <span class="demo-title">10 - shoes store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->

                                                    <div class="demo-item hidden">
                                                        <a href="index-11.html">
                                                            <span class="demo-bg" style="background-image: url(assets/images/menu/demos/11.jpg);"></span>
                                                            <span class="demo-title">11 - furniture simple store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->

                                                    <div class="demo-item hidden">
                                                        <a href="index-12.html">
                                                            <span class="demo-bg" style="background-image: url(assets/images/menu/demos/12.jpg);"></span>
                                                            <span class="demo-title">12 - fashion simple store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->

                                                    <div class="demo-item hidden">
                                                        <a href="index-13.html">
                                                            <span class="demo-bg" style="background-image: url(assets/images/menu/demos/13.jpg);"></span>
                                                            <span class="demo-title">13 - market</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->

                                                    <div class="demo-item hidden">
                                                        <a href="index-14.html">
                                                            <span class="demo-bg" style="background-image: url(assets/images/menu/demos/14.jpg);"></span>
                                                            <span class="demo-title">14 - market fullwidth</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->

                                                    <div class="demo-item hidden">
                                                        <a href="index-15.html">
                                                            <span class="demo-bg" style="background-image: url(assets/images/menu/demos/15.jpg);"></span>
                                                            <span class="demo-title">15 - lookbook 1</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->

                                                    <div class="demo-item hidden">
                                                        <a href="index-16.html">
                                                            <span class="demo-bg" style="background-image: url(assets/images/menu/demos/16.jpg);"></span>
                                                            <span class="demo-title">16 - lookbook 2</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->

                                                    <div class="demo-item hidden">
                                                        <a href="index-17.html">
                                                            <span class="demo-bg" style="background-image: url(assets/images/menu/demos/17.jpg);"></span>
                                                            <span class="demo-title">17 - fashion store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->

                                                    <div class="demo-item hidden">
                                                        <a href="index-18.html">
                                                            <span class="demo-bg" style="background-image: url(assets/images/menu/demos/18.jpg);"></span>
                                                            <span class="demo-title">18 - fashion store (with sidebar)</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->

                                                    <div class="demo-item hidden">
                                                        <a href="index-19.html">
                                                            <span class="demo-bg" style="background-image: url(assets/images/menu/demos/19.jpg);"></span>
                                                            <span class="demo-title">19 - games store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->

                                                    <div class="demo-item hidden">
                                                        <a href="index-20.html">
                                                            <span class="demo-bg" style="background-image: url(assets/images/menu/demos/20.jpg);"></span>
                                                            <span class="demo-title">20 - book store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->

                                                    <div class="demo-item hidden">
                                                        <a href="index-21.html">
                                                            <span class="demo-bg" style="background-image: url(assets/images/menu/demos/21.jpg);"></span>
                                                            <span class="demo-title">21 - sport store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->

                                                    <div class="demo-item hidden">
                                                        <a href="index-22.html">
                                                            <span class="demo-bg" style="background-image: url(assets/images/menu/demos/22.jpg);"></span>
                                                            <span class="demo-title">22 - tools store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->

                                                    <div class="demo-item hidden">
                                                        <a href="index-23.html">
                                                            <span class="demo-bg" style="background-image: url(assets/images/menu/demos/23.jpg);"></span>
                                                            <span class="demo-title">23 - fashion left navigation store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->

                                                    <div class="demo-item hidden">
                                                        <a href="index-24.html">
                                                            <span class="demo-bg" style="background-image: url(assets/images/menu/demos/24.jpg);"></span>
                                                            <span class="demo-title">24 - extreme sport store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->

                                                </div><!-- End .demo-list -->

                                                <div class="megamenu-action text-center">
                                                    <a href="#" class="btn btn-outline-primary-2 view-all-demos"><span>View All Demos</span><i class="icon-long-arrow-right"></i></a>
                                                </div><!-- End .text-center -->
                                            </div><!-- End .menu-col -->
                                        </div><!-- End .megamenu -->
                                    </li>
                                    <li>
                                        <a href="category.html" class="sf-with-ul">Shop</a>

                                        <div class="megamenu megamenu-md">
                                            <div class="row no-gutters">
                                                <div class="col-md-8">
                                                    <div class="menu-col">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="menu-title">Shop with sidebar</div><!-- End .menu-title -->
                                                                <ul>
                                                                    <li><a href="category-list.html">Shop List</a></li>
                                                                    <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                                                                    <li><a href="category.html">Shop Grid 3 Columns</a></li>
                                                                    <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                                                                    <li><a href="category-market.html"><span>Shop Market<span class="tip tip-new">New</span></span></a></li>
                                                                </ul>

                                                                <div class="menu-title">Shop no sidebar</div><!-- End .menu-title -->
                                                                <ul>
                                                                    <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                                                                    <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                                                                </ul>
                                                            </div><!-- End .col-md-6 -->

                                                            <div class="col-md-6">
                                                                <div class="menu-title">Product Category</div><!-- End .menu-title -->
                                                                <ul>
                                                                    <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                                                                    <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                                                                </ul>
                                                                <div class="menu-title">Shop Pages</div><!-- End .menu-title -->
                                                                <ul>
                                                                    <li><a href="cart.html">Cart</a></li>
                                                                    <li><a href="checkout.html">Checkout</a></li>
                                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                                    <li><a href="dashboard.html">My Account</a></li>
                                                                    <li><a href="#">Lookbook</a></li>
                                                                </ul>
                                                            </div><!-- End .col-md-6 -->
                                                        </div><!-- End .row -->
                                                    </div><!-- End .menu-col -->
                                                </div><!-- End .col-md-8 -->

                                                <div class="col-md-4">
                                                    <div class="banner banner-overlay">
                                                        <a href="category.html" class="banner banner-menu">
                                                            <img src="assets/images/menu/banner-1.jpg" alt="Banner">

                                                            <div class="banner-content banner-content-top">
                                                                <div class="banner-title text-white">Last <br>Chance<br><span><strong>Sale</strong></span></div><!-- End .banner-title -->
                                                            </div><!-- End .banner-content -->
                                                        </a>
                                                    </div><!-- End .banner banner-overlay -->
                                                </div><!-- End .col-md-4 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .megamenu megamenu-md -->
                                    </li>
                                    <li>
                                        <a href="product.html" class="sf-with-ul">Product</a>

                                        <div class="megamenu megamenu-sm">
                                            <div class="row no-gutters">
                                                <div class="col-md-6">
                                                    <div class="menu-col">
                                                        <div class="menu-title">Product Details</div><!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="product.html">Default</a></li>
                                                            <li><a href="product-centered.html">Centered</a></li>
                                                            <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                                                            <li><a href="product-gallery.html">Gallery</a></li>
                                                            <li><a href="product-sticky.html">Sticky Info</a></li>
                                                            <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                                                            <li><a href="product-fullwidth.html">Full Width</a></li>
                                                            <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                                                        </ul>
                                                    </div><!-- End .menu-col -->
                                                </div><!-- End .col-md-6 -->

                                                <div class="col-md-6">
                                                    <div class="banner banner-overlay">
                                                        <a href="category.html">
                                                            <img src="assets/images/menu/banner-2.jpg" alt="Banner">

                                                            <div class="banner-content banner-content-bottom">
                                                                <div class="banner-title text-white">New Trends<br><span><strong>spring 2019</strong></span></div><!-- End .banner-title -->
                                                            </div><!-- End .banner-content -->
                                                        </a>
                                                    </div><!-- End .banner -->
                                                </div><!-- End .col-md-6 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .megamenu megamenu-sm -->
                                    </li>
                                    <li>
                                        <a href="#" class="sf-with-ul">Pages</a>

                                        <ul>
                                            <li>
                                                <a href="about.html" class="sf-with-ul">About</a>

                                                <ul>
                                                    <li><a href="about.html">About 01</a></li>
                                                    <li><a href="about-2.html">About 02</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="contact.html" class="sf-with-ul">Contact</a>

                                                <ul>
                                                    <li><a href="contact.html">Contact 01</a></li>
                                                    <li><a href="contact-2.html">Contact 02</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="faq.html">FAQs</a></li>
                                            <li><a href="404.html">Error 404</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="blog.html" class="sf-with-ul">Blog</a>

                                        <ul>
                                            <li><a href="blog.html">Classic</a></li>
                                            <li><a href="blog-listing.html">Listing</a></li>
                                            <li>
                                                <a href="#">Grid</a>
                                                <ul>
                                                    <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                                    <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                                    <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                                    <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Masonry</a>
                                                <ul>
                                                    <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                                    <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                                    <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                                    <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Mask</a>
                                                <ul>
                                                    <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                                    <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Single Post</a>
                                                <ul>
                                                    <li><a href="single.html">Default with sidebar</a></li>
                                                    <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                                    <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="elements-list.html" class="sf-with-ul">Elements</a>

                                        <ul>
                                            <li><a href="elements-products.html">Products</a></li>
                                            <li><a href="elements-typography.html">Typography</a></li>
                                            <li><a href="elements-titles.html">Titles</a></li>
                                            <li><a href="elements-banners.html">Banners</a></li>
                                            <li><a href="elements-product-category.html">Product Category</a></li>
                                            <li><a href="elements-video-banners.html">Video Banners</a></li>
                                            <li><a href="elements-buttons.html">Buttons</a></li>
                                            <li><a href="elements-accordions.html">Accordions</a></li>
                                            <li><a href="elements-tabs.html">Tabs</a></li>
                                            <li><a href="elements-testimonials.html">Testimonials</a></li>
                                            <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                                            <li><a href="elements-portfolio.html">Portfolio</a></li>
                                            <li><a href="elements-cta.html">Call to Action</a></li>
                                            <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                                        </ul>
                                    </li>
                                </ul><!-- End .menu -->
                            </nav><!-- End .main-nav -->
                        </div><!-- End .header-left -->

                        <div class="header-right">
                            <div class="header-search">
                                <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                                <form action="#" method="get">
                                    <div class="header-search-wrapper">
                                        <label for="q" class="sr-only">Search</label>
                                        <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required>
                                    </div><!-- End .header-search-wrapper -->
                                </form>
                            </div><!-- End .header-search -->
                            <div class="dropdown compare-dropdown">
                                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Compare Products" aria-label="Compare Products">
                                    <i class="icon-random"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="compare-products">
                                        <li class="compare-product">
                                            <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                            <h4 class="compare-product-title"><a href="product.html">Blue Night Dress</a></h4>
                                        </li>
                                        <li class="compare-product">
                                            <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                            <h4 class="compare-product-title"><a href="product.html">White Long Skirt</a></h4>
                                        </li>
                                    </ul>

                                    <div class="compare-actions">
                                        <a href="#" class="action-link">Clear All</a>
                                        <a href="#" class="btn btn-outline-primary-2"><span>Compare</span><i class="icon-long-arrow-right"></i></a>
                                    </div>
                                </div><!-- End .dropdown-menu -->
                            </div><!-- End .compare-dropdown -->

                            <div class="dropdown cart-dropdown">
                                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="cart-count">2</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-cart-products">
                                        <div class="product">
                                            <div class="product-cart-details">
                                                <h4 class="product-title">
                                                    <a href="product.html">Beige knitted elastic runner shoes</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    x $84.00
                                                </span>
                                            </div><!-- End .product-cart-details -->

                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                                </a>
                                            </figure>
                                            <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                        </div><!-- End .product -->

                                        <div class="product">
                                            <div class="product-cart-details">
                                                <h4 class="product-title">
                                                    <a href="product.html">Blue utility pinafore denim dress</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    x $76.00
                                                </span>
                                            </div><!-- End .product-cart-details -->

                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="assets/images/products/cart/product-2.jpg" alt="product">
                                                </a>
                                            </figure>
                                            <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                        </div><!-- End .product -->
                                    </div><!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>Total</span>

                                        <span class="cart-total-price">$160.00</span>
                                    </div><!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="cart.html" class="btn btn-primary">View Cart</a>
                                        <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .dropdown-cart-total -->
                                </div><!-- End .dropdown-menu -->
                            </div><!-- End .cart-dropdown -->
                        </div><!-- End .header-right -->
                    </div><!-- End .container -->
                </div><!-- End .header-middle -->
            </header><!-- End .header -->
            <header class="header header-6 ">
                <div class="header-top">
                    <div class="container">
                        <div class="header-left">
                            <ul class="top-menu top-link-menu d-none d-md-block">
                                <li>
                                    <a href="#">Liens</a>
                                    <ul>
                                        <li><a href="tel:+33782474450"><i class="icon-phone"></i>Tel: +33 7 82 47 44 50</a></li>
                                    </ul>
                                </li>
                            </ul><!-- End .top-menu -->
                        </div><!-- End .header-left -->

                        <div class="header-right">
                            <div class="social-icons social-icons-color">
                                <a href="https://www.facebook.com/GryphusBrand" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                <a href="https://twitter.com/GryphusBrand" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                <a href="https://www.instagram.com/gryphusbrand" class="social-icon social-instagram" title="Pinterest" target="_blank"><i class="icon-instagram"></i></a>
                                <a href="https://www.youtube.com/channel/UCulMKPO82Hln25y4Mw7eP-A" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                            </div><!-- End .soial-icons -->
                            @auth
                            <div class="header-dropdown">
                                <a href="#"><i class="icon-user"></i> {{ Auth::user()->name }}</a></a>
                                <div class="header-menu">
                                    <ul>
                                        <li>
                                            <x-dropdown-link :href="route('dashboard')">
                                                {{ __('Tableau de bord') }}
                                            </x-dropdown-link>
                                        </li>

                                        <li>
                                            <x-dropdown-link :href="route('profile.edit')">
                                                {{ __('Profile') }}
                                            </x-dropdown-link>
                                        </li>
                                        <li>
                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf

                                                <x-dropdown-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                                    {{ __('Me déconnecter') }}
                                                </x-dropdown-link>
                                            </form>
                                        </li>
                                    </ul>
                                </div><!-- End .header-menu -->
                            </div><!-- End .header-dropdown -->
                            @else
                            <ul class="top-menu top-link-menu">
                                <li>
                                    <a href="#">Links</a>
                                    <ul>
                                        <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Se Connecter</a></li>
                                    </ul>
                                </li>
                            </ul><!-- End .top-menu -->
                            @endauth

                            <div class="header-dropdown">
                                <a href="#">Eur</a>
                                <div class="header-menu">
                                    <ul>
                                        <li><a href="#">Eur</a></li>
                                        <li><a href="#">Usd</a></li>
                                    </ul>
                                </div><!-- End .header-menu -->
                            </div><!-- End .header-dropdown -->

                            <div class="header-dropdown">
                                <a href="#">Fr</a>
                                <div class="header-menu">
                                    <ul>
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Français</a></li>
                                        <li><a href="#">Espagnol</a></li>
                                    </ul>
                                </div><!-- End .header-menu -->
                            </div><!-- End .header-dropdown -->
                        </div><!-- End .header-right -->
                    </div>
                </div>
                <div class="header-middle">
                    <div class="container">
                        <div class="header-left">

                            <a href="{{ route('home') }}" class="logo">
                                <img src="{{ asset('assets/images/logo-icon.png')}}" alt="Gryphus Brand Logo" width="50" height="50">
                            </a>
                        </div>

                        <div class="header-right">
                            <div class="header-search">
                                <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                                <form action="#" method="get">
                                    <div class="header-search-wrapper">
                                        <label for="q" class="sr-only">Search</label>
                                        <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required>
                                    </div><!-- End .header-search-wrapper -->
                                </form>
                            </div><!-- End .header-search -->
                            <a href="{{ route('wishlist') }}" class="wishlist-link">
                                <i class="icon-heart-o"></i>
                                {{-- <span class="wishlist-count">3</span> --}}
                                <span class="wishlist-txt">Ma Wishlist</span>
                            </a>

                            @php
                                $cart = \Gloudemans\Shoppingcart\Facades\Cart::instance('cart');
                                $cart_items = $cart->content();
                            @endphp

                            <div class="dropdown cart-dropdown">
                                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                    <i class="icon-shopping-cart"></i>

                                    <span class="cart-count">{{ $cart->count() }}</span>
                                    <span class="cart-txt">{{ $cart->total() }} €</span>
                                </a>

                                @if($cart_items->isNotEmpty())
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-cart-products">

                                        @foreach($cart_items as $item)
                                        <div class="product">
                                            <div class="product-cart-details">
                                                <h4 class="product-title">
                                                    <a href="#">{{ $item->name }}</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">{{ $item->qty }}</span>
                                                    x {{ $item->price }} €
                                                </span>
                                            </div><!-- End .product-cart-details -->

                                            <figure class="product-image-container">
                                                <a href="#" class="product-image">
                                                    <img src="{{ asset('assets/images/products/cart/product-1.jpg')}}" alt="product">
                                                </a>
                                            </figure>
                                            <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                        </div><!-- End .product -->
                                        @endforeach

                                    </div><!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>Total</span>

                                        <span class="cart-total-price">{{ $cart->total }} €</span>
                                    </div><!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="{{ route('cart') }}" class="btn btn-primary">Voir mon panier</a>
                                        <a href="{{ route('checkout') }}" class="btn btn-outline-primary-2"><span>Procéder au paiement</span><i class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .dropdown-cart-total -->
                                </div><!-- End .dropdown-menu -->
                                @endif


                            </div><!-- End .cart-dropdown -->
                        </div>
                    </div><!-- End .container -->
                </div><!-- End .header-middle -->

                <div class="header-bottom sticky-header">
                    <div class="container">
                        <div class="header-left">
                            <nav class="main-nav">
                                <ul class="menu sf-arrows">

                                    <!-- Men -->
                                    <li class="">
                                        <a href="{{ route('shop') }}" class="sf-with-ul">Homme</a>

                                        <div class="megamenu megamenu-md">
                                            <div class="row no-gutters">
                                                <div class="col-md-8">
                                                    <div class="menu-col">
                                                        <div class="row">

                                                            <div class="col-md-12">
                                                                <div class="menu-title">Vêtements</div><!-- End .menu-title -->
                                                                <ul>
                                                                    <li><a href="{{ route('shop') }}">Tee-shirts</a></li>
                                                                    <li><a href="{{ route('shop') }}">Sweats à capuche et sweat-shirts</a></li>
                                                                    <li><a href="{{ route('shop') }}">Shorts de sport</a></li>
                                                                </ul>
                                                            </div><!-- End .col-md-6 -->

                                                        </div><!-- End .row -->
                                                    </div><!-- End .menu-col -->
                                                </div><!-- End .col-md-8 -->

                                                <div class="col-md-4">
                                                    <div class="banner banner-overlay">
                                                        <a href="{{ route('shop') }}" class="banner banner-menu">
                                                            <img src="{{ asset('assets/images/menu/banner-8.jpg')}}" alt="Banner">

                                                            <div class="banner-content banner-content-top">
                                                                <div class="banner-title text-white">Trouvez <br>votre<br><span><strong>Choix</strong></span></div><!-- End .banner-title -->
                                                            </div><!-- End .banner-content -->
                                                        </a>
                                                    </div><!-- End .banner banner-overlay -->
                                                </div><!-- End .col-md-4 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .megamenu megamenu-md -->
                                    </li>

                                    <!-- Women -->
                                    <li class="">
                                        <a href="{{ route('shop') }}" class="sf-with-ul">Femmes</a>

                                        <div class="megamenu megamenu-md">
                                            <div class="row no-gutters">
                                                <div class="col-md-8">
                                                    <div class="menu-col">
                                                        <div class="row">

                                                            <div class="col-md-12">
                                                                <div class="menu-title">Vêtements</div><!-- End .menu-title -->
                                                                <ul>
                                                                    <li><a href="{{ route('shop') }}">Tee-shirts</a></li>
                                                                    <li><a href="{{ route('shop') }}">Sweats ou sweat-shirts à capuche</a></li>
                                                                    <li><a href="{{ route('shop') }}">Shorts de sport</a></li>
                                                                    <li><a href="{{ route('shop') }}">Leggings</a></li>
                                                                </ul>
                                                            </div><!-- End .col-md-6 -->

                                                        </div><!-- End .row -->
                                                    </div><!-- End .menu-col -->
                                                </div><!-- End .col-md-8 -->

                                                <div class="col-md-4">
                                                    <div class="banner banner-overlay">
                                                        <a href="{{ route('shop') }}" class="banner banner-menu">
                                                            <img src="{{ asset('assets/images/menu/banner-7.jpg')}}" alt="Banner">

                                                            <div class="banner-content banner-content-top">
                                                                <div class="banner-title text-white">Trouvez <br>votre<br><span><strong>Choix</strong></span></div><!-- End .banner-title -->
                                                            </div><!-- End .banner-content -->
                                                        </a>
                                                    </div><!-- End .banner banner-overlay -->
                                                </div><!-- End .col-md-4 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .megamenu megamenu-md -->
                                    </li>

                                    <!-- Kids -->
                                    <li class="">
                                        <a href="{{ route('shop') }}" class="sf-with-ul">Enfants</a>

                                        <div class="megamenu megamenu-md">
                                            <div class="row no-gutters">
                                                <div class="col-md-8">
                                                    <div class="menu-col">
                                                        <div class="row">

                                                            <div class="col-md-12">
                                                                <div class="menu-title">Vêtements</div><!-- End .menu-title -->
                                                                <ul>
                                                                    <li><a href="{{ route('shop') }}">Tee-shirts</a></li>
                                                                    <li><a href="{{ route('shop') }}">Sweats à capuche et sweat-shirts</a></li>
                                                                    <li><a href="{{ route('shop') }}">Shorts de sport</a></li>
                                                                </ul>
                                                            </div><!-- End .col-md-6 -->

                                                        </div><!-- End .row -->
                                                    </div><!-- End .menu-col -->
                                                </div><!-- End .col-md-8 -->

                                                <div class="col-md-4">
                                                    <div class="banner banner-overlay">
                                                        <a href="{{ route('shop') }}" class="banner banner-menu">
                                                            <img src="{{ asset('assets/images/menu/banner-4.jpg')}}" alt="Banner">

                                                            <div class="banner-content banner-content-top">
                                                                <div class="banner-title text-white">Trouvez <br>votre<br><span><strong>Choix</strong></span></div><!-- End .banner-title -->
                                                            </div><!-- End .banner-content -->
                                                        </a>
                                                    </div><!-- End .banner banner-overlay -->
                                                </div><!-- End .col-md-4 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .megamenu megamenu-md -->
                                    </li>

                                    <!-- Shoes -->
                                    <li>
                                        <a href="{{ route('shop') }}" class="sf-with-li">
                                            Chaussures
                                        </a>
                                    </li>

                                    <!-- The Brand -->
                                    <li>
                                        <a href="#" class="sf-with-ul">La marque</a>

                                        <ul>
                                            <li><a href="{{ route('about') }}#story">Notre histoire</a></li>
                                            <li><a href="{{ route('about') }}#story">Nos engagements</a></li>
                                            <li><a href="#">Equipements Club</a></li>
                                            <li><a href="#">Nos points de vente</a></li>
                                        </ul>
                                    </li>

                                </ul><!-- End .menu -->
                            </nav><!-- End .main-nav -->

                            <button class="mobile-menu-toggler">
                                <span class="sr-only">Toggle mobile menu</span>
                                <i class="icon-bars"></i>
                            </button>
                        </div><!-- End .header-left -->

                        <div class="header-right">
                            <i class="la la-lightbulb-o"></i><p>Commandez votre paire de Gry One</span></p>
                        </div>
                    </div><!-- End .container -->
                </div><!-- End .header-bottom -->
            </header><!-- End .header -->

            @yield('content')

            <footer class="footer footer-2">
                <div class="footer-middle">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="widget widget-about">
                                    <img src="{{ asset('assets/images/demos/demo-9/logo-footer-1.png')}}" class="footer-logo" alt="Gryphus Brand" width="195" height="65">
                                    <p>
                                        Gryphus Brand, fièrement française, incarne la passion du basketball et le style sportif dans chacun de ses produits.
                                        Nous sommes bien plus qu'une simple marque, nous sommes une communauté dévouée au basketball et au sportwear.
                                        Explorez notre gamme exceptionnelle d'équipements de basketball et de vêtements de sport, conçus avec amour et dévouement pour les amateurs de sport comme vous.
                                        Rejoignez-nous pour vivre l'esprit du basketball à la française avec Gryphus Brand.
                                    </p>

                                    <div class="widget-about-info">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4">
                                                <span class="widget-about-title">Vous avez des questions ?</span>
                                                <a href="tel:+33782474450">+33 7 82 47 44 50</a>
                                            </div><!-- End .col-sm-6 -->
                                            <div class="col-sm-6 col-md-8">
                                                <span class="widget-about-title">Moyens de paiement</span>
                                                <figure class="footer-payments">
                                                    <img src="{{ asset('assets/images/payments.png')}}" alt="Payment methods" width="272" height="20">
                                                </figure><!-- End .footer-payments -->
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .widget-about-info -->
                                </div><!-- End .widget about-widget -->
                            </div><!-- End .col-sm-12 col-lg-3 -->

                            <div class="col-sm-4 col-lg-2">
                                <div class="widget">
                                    <h4 class="widget-title">Information</h4><!-- End .widget-title -->

                                    <ul class="widget-list">
                                        <li><a href="{{ route('about') }}">A propos de <strong>Gryphus</strong></a></li>
                                        <li><a href="#">Acheter sur Gryphus</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="contact.html">Contactez-nous</a></li>
                                        <li><a href="login.html">Se connecter</a></li>
                                    </ul><!-- End .widget-list -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-4 col-lg-3 -->

                            <div class="col-sm-4 col-lg-2">
                                <div class="widget">
                                    <h4 class="widget-title">Service CLients</h4><!-- End .widget-title -->

                                    <ul class="widget-list">
                                        <li><a href="#">Moyens de paiement</a></li>
                                        <li><a href="#">Garantie de remboursement</a></li>
                                        <li><a href="#">Retours</a></li>
                                        <li><a href="#">Livraisons</a></li>
                                        <li><a href="#">Termes et conditions</a></li>
                                        <li><a href="#">Politique de confidentialité</a></li>
                                    </ul><!-- End .widget-list -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-4 col-lg-3 -->

                            <div class="col-sm-4 col-lg-2">
                                <div class="widget">
                                    <h4 class="widget-title">Mon Compte</h4><!-- End .widget-title -->

                                    <ul class="widget-list">
                                        <li><a href="#signin-modal">Se connecter</a></li>
                                        <li><a href="{{ route('cart') }}">Mon panier</a></li>
                                        <li><a href="{{ route('wishlist') }}">Ma Wishlist</a></li>
                                        <li><a href="#">Suivre ma commande</a></li>
                                        <li><a href="#">Support</a></li>
                                    </ul><!-- End .widget-list -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-64 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .footer-middle -->

                <div class="footer-bottom">
                    <div class="container">
                        <p class="footer-copyright">Copyright © 2023 <strong>Gryphus Brand</strong>. Tous droits réservés.</p><!-- End .footer-copyright -->
                        <ul class="footer-menu">
                            <li><a href="#">Conditions d'utilisation</a></li>
                            <li><a href="#">Politique de confidentialité</a></li>
                        </ul><!-- End .footer-menu -->

                        <div class="social-icons social-icons-color">
                            <span class="social-label">Réseaux Sociaux</span>
                            <a href="https://www.facebook.com/GryphusBrand" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                            <a href="https://twitter.com/GryphusBrand" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                            <a href="https://www.instagram.com/gryphusbrand" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCulMKPO82Hln25y4Mw7eP-A" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                        </div><!-- End .soial-icons -->
                    </div><!-- End .container -->
                </div><!-- End .footer-bottom -->
            </footer><!-- End .footer -->

        </div><!-- End .page-wrapper -->
        <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

        <!-- Mobile Menu -->
        <!-- Mobile Menu -->
        <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

        <div class="mobile-menu-container">
            <div class="mobile-menu-wrapper">
                <span class="mobile-menu-close"><i class="icon-close"></i></span>

                <form action="#" method="get" class="mobile-search">
                    <label for="mobile-search" class="sr-only">Recherchez</label>
                    <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Tapez le nom du produit..." required>
                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                </form>

                <nav class="mobile-nav">
                    <ul class="mobile-menu">
                        <li class="active">
                            <a href="{{ route('shop') }}">Nouveautés</a>
                            <ul>
                                <li>
                                    <a href="{{ route('shop') }}" class="sf-with-ul">Homme</a>
                                </li>
                                <li>
                                    <a href="{{ route('shop') }}" class="sf-with-ul">Femme</a>
                                </li>
                                <li>
                                    <a href="{{ route('shop') }}" class="sf-with-ul">Enfants</a>
                                </li>
                            </ul>

                        </li>
                        <li>
                            <a href="{{ route('shop') }}">Homme</a>
                            <ul>
                                <li>
                                    <a href="{{ route('shop') }}">Tee-shirts</a><!-- End .menu-title -->
                                </li>
                                <li>
                                    <a href="{{ route('shop') }}">Sweats à capuche et sweat-shirts</a><!-- End .menu-title -->
                                </li>
                                <li>
                                    <a href="{{ route('shop') }}">Shorts de sport</a><!-- End .menu-title -->
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('shop') }}" class="sf-with-ul">Femme</a>
                            <ul>
                                <li>
                                    <a href="{{ route('shop') }}">Tee-shirts</a><!-- End .menu-title -->
                                </li>
                                <li>
                                    <a href="{{ route('shop') }}">Sweats à capuche et sweat-shirts</a><!-- End .menu-title -->
                                </li>
                                <li>
                                    <a href="{{ route('shop') }}">Shorts de sport</a><!-- End .menu-title -->
                                </li>
                                <li>
                                    <a href="{{ route('shop') }}">Leggings</a><!-- End .menu-title -->
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('shop') }}">Enfants</a>
                            <ul>
                                <li>
                                    <a href="{{ route('shop') }}">Tee-shirts</a><!-- End .menu-title -->
                                </li>
                                <li>
                                    <a href="{{ route('shop') }}">Sweats à capuche et sweat-shirts</a><!-- End .menu-title -->
                                </li>
                                <li>
                                    <a href="{{ route('shop') }}">Shorts de sport</a><!-- End .menu-title -->
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('shop') }}">Chaussures</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}">La Marque</a>

                            <ul>
                                <li><a href="{{ route('about') }}#story">Notre histoire</a></li>
                                <li><a href="{{ route('about') }}">Nos engagements</a></li>
                                <li><a href="{{ route('about') }}#partners">Nos collabs</a></li>
                                <li><a href="{{ route('about') }}">Nos points de vente</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav><!-- End .mobile-nav -->

                <div class="social-icons social-icons-color">
                    <a href="https://www.facebook.com/GryphusBrand" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                    <a href="https://twitter.com/GryphusBrand" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                    <a href="https://www.instagram.com/gryphusbrand" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCulMKPO82Hln25y4Mw7eP-A" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
                </div><!-- End .social-icons -->
            </div><!-- End .mobile-menu-wrapper -->
        </div><!-- End .mobile-menu-container -->
        <!-- End Mobile Menu -->

        @include('auth.modals.login')

        <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row no-gutters bg-white newsletter-popup-content">
                        <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                            <div class="banner-content text-center">
                                <img src="{{ asset('assets/images/popup/newsletter/logo-1.png')}}" class="logo" alt="Gryphus Brand" width="100" height="30">
                                <h2 class="banner-title">Obtenez <span>25<light>%</light></span> de réduction</h2>
                                <p>
                                    Abonnez-vous à la newsletter <strong>Gryphus Brand</strong> pour recevoir des mises à jour en temps opportun de vos produits préférés.
                                </p>
                                <form action="#">
                                    <div class="input-group input-group-round">
                                        <input type="email" class="form-control form-control-white" placeholder="Votre adresse email" aria-label="Email Adress" required>
                                        <div class="input-group-append">
                                            <button class="btn" type="submit"><span>Rejoindre</span></button>
                                        </div><!-- .End .input-group-append -->
                                    </div><!-- .End .input-group -->
                                </form>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                    <label class="custom-control-label" for="register-policy-2">Ne plus afficher</label>
                                </div><!-- End .custom-checkbox -->
                            </div>
                        </div>
                        <div class="col-xl-2-5col col-lg-5 ">
                            <img src="{{ asset('assets/images/popup/newsletter/img-2.jpg')}}" class="newsletter-img" alt="newsletter">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @include('includes.main-js')
    </body>


    <!--  09 Nov 2023 09:57:25 GMT -->
</html>
