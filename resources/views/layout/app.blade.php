<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>E-Commerce</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.ico">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="/css/style.min.css">
</head>
<body>
        <div class="page-wrapper">
            <header class="header">
            <div class="header-info">
                <div class="container">
                    <div class="header-left">
                        <ul class="header-info-list">
                            <li>Free shipping & Return</li>
                            <li>money back guarantee</li>
                            <li>online support 24/7</li>
                        </ul>
                    </div><!-- End .header-left -->
                    <div class="header-right">
                        <div class="header-contact">
                            <span>Call Us</span>
                            <a href="tel:#"><strong>+234</strong></a>
                        </div><!-- End .header-contact -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-info -->


            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <div class="header-dropdowns">

                        </div><!-- End .header-dropdowns -->


                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <a href="/" class="logo">
                            <h2 class="style-title">E-Commerce with Digital Payment</h2>
                        </a>
                    </div><!-- End .headeer-center -->

                    <div class="header-right">
                        <button class="mobile-menu-toggler" type="button">
                            <i class="icon-menu"></i>
                        </button>
                        <div class="header-search">
                            <a href="category-flex-grid.html#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <div class="header-search-wrapper">
                                <form action="category-flex-grid.html#" method="get">
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
                                    <button class="btn" type="submit"><i class="icon-search"></i></button>
                                </form>
                            </div><!-- End .header-search-wrapper -->
                        </div><!-- End .header-search -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li><a href="/">Home</a></li>
                            <li>
                                <a href="#" class="sf-with-ul">Categories</a>
                                <ul>
                                   @if (count($categories) > 0)
                                    @foreach ($categories as $category)
                                        <li><a href="/category/{{str_slug(array_get($category, 'title'))}}">{{array_get($category, 'title')}}</a></li>
                                    @endforeach
                                @endif
                                </ul>
                            </li>

                            <li>
                                <a href="/account/signup" class="sf-with-ul">User Account</a>
                            </li>

                            <li><a href="/account/about">About Us</a></li>
                        </ul>
                    </nav>

                    <div class="dropdown cart-dropdown">
                        <a href="/cart" >
                            <span class="cart-count">
                            @if (session('cart'))
                                {{count(session('cart'))}}
                            @else
                                0
                            @endif
                            </span><span>
                            Item(s) in cart</span>
                        </a>

                    </div><!-- End .dropdown -->
                </div><!-- End .container-->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->
    @yield('content')

        <footer class="footer">
            <div class="container">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-md-9 col-lg-9">
                            <div class="widget widget-newsletter">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4 class="widget-title">Subscribe newsletter</h4>
                                        <p>Get all the latest information on Events,Sales and Offers. Sign up for newsletter today</p>
                                    </div><!-- End .col-lg-6 -->

                                    <div class="col-lg-6">
                                        <form action="index.html#">
                                            <input type="email" class="form-control" placeholder="Email address" required>

                                            <input type="submit" class="btn" value="Subscribe">
                                        </form>
                                    </div><!-- End .col-lg-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-xl-8 -->

                        <div class="col-md-3 col-lg-3 widget-social">
                            <div class="social-icons">
                                <a href="index.html#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                                <a href="index.html#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                                <a href="index.html#" class="social-icon" target="_blank"><i class="icon-linkedin"></i></a>
                            </div><!-- End .social-icons -->
                        </div><!-- End .col-xl-4 -->
                    </div><!-- End .row -->
                </div><!-- End .footer-top -->
            </div><!-- End .container -->

            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Contact Us</h4>
                                <ul class="contact-info">
                                    <li>
                                        <span class="contact-info-label">Address:</span>123 Street Name, City, England
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Phone:</span>Toll Free <a href="tel:">(123) 456-7890</a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Email:</span> <a href="mailto:mail@example.com">mail@example.com</a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Working Days/Hours:</span>
                                        Mon - Sun / 9:00AM - 8:00PM
                                    </li>
                                </ul>
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="widget">
                                        <h4 class="widget-title">My Account</h4>

                                        <div class="row">
                                            <div class="col-sm-6 col-md-5">
                                                <ul class="links">
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="contact.html">Contact Us</a></li>
                                                    <li><a href="my-account.html">My Account</a></li>
                                                </ul>
                                            </div><!-- End .col-sm-6 -->
                                            <div class="col-sm-6 col-md-5">
                                                <ul class="links">
                                                    <li><a href="index.html#">Orders History</a></li>
                                                    <li><a href="index.html#">Advanced Search</a></li>
                                                    <li><a href="index.html#" class="login-link">Login</a></li>
                                                </ul>
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .widget -->
                                </div><!-- End .col-md-5 -->

                                <div class="col-md-7">
                                    <div class="widget">
                                        <h4 class="widget-title">Main Features</h4>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul class="links">
                                                    <li><a href="index.html#">Super Fast Magento Theme</a></li>
                                                    <li><a href="index.html#">1st Fully working Ajax Theme</a></li>
                                                    <li><a href="index.html#">20 Unique Homepage Layouts</a></li>
                                                </ul>
                                            </div><!-- End .col-sm-6 -->
                                            <div class="col-sm-6">
                                                <ul class="links">
                                                    <li><a href="index.html#">Powerful Admin Panel</a></li>
                                                    <li><a href="index.html#">Mobile & Retina Optimized</a></li>
                                                </ul>
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .widget -->
                                </div><!-- End .col-md-7 -->
                            </div><!-- End .row -->

                            <div class="footer-bottom">
                                <p class="footer-copyright">Porto eCommerce. &copy;  2018.  All Rights Reserved</p>
                                <img src="/images/payments.png" alt="payment methods" class="footer-payments">
                            </div><!-- End .footer-bottom -->
                        </div><!-- End .col-lg-9 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-middle -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->

    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li>
                        <a href="#">Categories</a>
                        <ul>
                            @if (count($categories) > 0)
                                @foreach ($categories as $category)
                                    <li><a href="category-banner-full-width.html">{{array_get($category, 'title')}}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </li>

                    <li><a href="blog.html">Blog</a>
                        <ul>
                            <li><a href="single.html">Blog Post</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>

                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="index.html#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                <a href="index.html#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                <a href="index.html#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <div class="newsletter-popup mfp-hide" id="newsletter-popup-form" style="background-image: url(/images/newsletter_popup_bg.jpg)">
        <div class="newsletter-popup-content">
            <img src="/images/logo-black.png" alt="Logo" class="logo-newsletter">
            <h2>BE THE FIRST TO KNOW</h2>
            <p>Subscribe to the Porto eCommerce newsletter to receive timely updates from your favorite products.</p>
            <form action="index.html#">
                <div class="input-group">
                    <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Email address" required>
                    <input type="submit" class="btn" value="Go!">
                </div><!-- End .from-group -->
            </form>
            <div class="newsletter-subscribe">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1">
                        Don't show this popup again
                    </label>
                </div>
            </div>
        </div><!-- End .newsletter-popup-content -->
    </div><!-- End .newsletter-popup -->

    <a id="scroll-top" href="index.html#top" title="Top" role="button"><i class="icon-angle-up"></i></a>


        <!-- Plugins JS File -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/plugins.min.js"></script>

    <!-- Main JS File -->
    <script src="/js/main-signature.js"></script>
    <script src="/js/main.min.js"></script>
</body>
</html>