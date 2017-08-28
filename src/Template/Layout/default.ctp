<!DOCTYPE html>
<html>
<head>
    <?php
    $cakeDescription = 'Blog Cake PHP Brasil';
    ?>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $cakeDescription ?></title>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('magnific-popup.css') ?>
    <?= $this->Html->css('owl.carousel.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('skin-black.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->Html->meta('icon') ?>
</head>
<body>
    <div class="outer">
        <div class="top-bar">
            <div class="container">
                <!-- Contact starts -->
                <div class="tb-contact pull-left">
                    <!-- Email -->
                    <i class="fa fa-envelope color"></i> &nbsp; <a href="mailto:contact@domain.com">contact@domain.com</a>
                    &nbsp;&nbsp;  
                    <!-- Phone -->
                    <i class="fa fa-phone color"></i> &nbsp; +1 (342)-(323)-4923
                </div>
                <!-- Contact ends -->
                                        
                <!-- Search section for responsive design -->
                <div class="tb-search pull-left">
                    <a href="#" class="b-dropdown"><i class="fa fa-search square-2 rounded-1 bg-color white"></i></a>
                    <div class="b-dropdown-block">
                        <form role="form">
                            <!-- Input Group -->
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Type Something">
                                <span class="input-group-btn">
                                    <button class="btn btn-color" type="button">Search</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Search section ends -->
                
                <!-- Social media starts -->
                <div class="tb-social pull-right">
                    <div class="brand-bg text-right">
                        <!-- Brand Icons -->
                        <a href="#" class="facebook"><i class="fa fa-facebook square-2 rounded-1"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter square-2 rounded-1"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus square-2 rounded-1"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin square-2 rounded-1"></i></a>
                        <a href="#" class="pinterest"><i class="fa fa-pinterest square-2 rounded-1"></i></a>
                    </div>
                </div>
                <!-- Social media ends -->
                <div class="clearfix"></div>
            </div>
        </div>

        <!-- Header two Starts -->
        <div class="header-2">
        
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <!-- Logo section -->
                        <div class="logo">
                            <h1><a href="#"><i class="fa fa-laptop"></i> <?= $cakeDescription ?></a></h1>
                        </div>
                    </div>
                    <div class="col-md-6">
                    
                        <!-- Navigation starts.  -->
                        <div class="navy">          
                            <ul>
                                <!-- Main menu -->
                                <li><a href="#">Home</a></li>
                                <li><a href="about-us-one.html">About Us</a></li>
                                <li><a href="contact-us-one.html">Contact Us</a></li>
                            </ul>
                        </div>                          
                        <!-- Navigation ends -->
                        
                    </div>
                    
                    <div class="col-md-1">
                        
                        <!-- Search section -->
                        <div class="head-search pull-right">
                            <a href="#" class="b-dropdown"><i class="fa fa-search square-2 rounded-1 bg-color white"></i></a>
                            <div class="b-dropdown-block">
                                <form role="form">
                                    <!-- Input Group -->
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type Something">
                                        <span class="input-group-btn">
                                            <button class="btn btn-color" type="button">Search</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Search section ends -->
                        <div class="clearfix"></div>
                        
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- Main content starts -->
        <div class="main-block">
            <?= $this->fetch('content') ?>
        </div>

        <!-- Foot Starts -->
        <div class="foot">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <!-- Foot Item -->
                        <div class="foot-item">
                            <!-- Heading -->
                            <h5 class="bold"><i class="fa fa-user"></i>&nbsp;&nbsp;About</h5>
                            <p>Itaque earum rerum hic tenetur a atque atatum dele niti atque tenetur a atque atatum tenetur volup tatum.</p>
                            <div class="brand-bg">
                                <!-- Social Media Icons -->
                                <a href="#" class="facebook"><i class="fa fa-facebook circle-3"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter circle-3"></i></a>
                                <a href="#" class="google-plus"><i class="fa fa-google-plus circle-3"></i></a>
                                <a href="#" class="linkedin"><i class="fa fa-linkedin circle-3"></i></a>
                                <a href="#" class="pinterest"><i class="fa fa-pinterest circle-3"></i></a>
                            </div>
                            <div class="subscribe-box">
                                <h5 class="bold">Subscribe :</h5>
                                <!-- Form -->
                                <form role="form">
                                    <!-- Input Group -->
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter Email Id">
                                        <span class="input-group-btn">
                                            <button class="btn btn-color" type="button">Subscribe</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>  
                    <div class="col-md-3 col-sm-6">
                        <!-- Foot Item -->
                        <div class="foot-item">
                            <!-- Heading -->
                            <h5 class="bold"><i class="fa fa-comments"></i>&nbsp;&nbsp;Recent Posts</h5>
                            <!-- Foot Item Content -->
                            <div class="foot-item-content">
                                <ul class="list-unstyled">
                                    <!-- Link -->
                                    <li><a href="#">Denocing Sapientes Contain</a></li>
                                    <li><a href="#">Dignissim Electronic Typeset</a></li>
                                    <li><a href="#">Laborum Desktop Publishing</a></li>
                                    <li><a href="#">Quibus PageMaker Including</a></li>
                                    <li><a href="#">Denocing Sapientes Contain</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- Foot Item -->
                        <div class="foot-item">
                            <!-- Heading -->
                            <h5 class="bold"><i class="fa fa-picture-o"></i>&nbsp;&nbsp;Recent Images</h5>
                            <!-- Foot Item Content -->
                            <div class="foot-item-content">
                                <!-- Foot Recent Image --> 
                                <div class="foot-recent-img">
                                    <a href="img/gallery/small/1.jpg" class="lightbox"><img src="img/gallery/small/1.jpg" alt="" class="img-responsive img-thumbnail" /></a>
                                    <a href="img/gallery/small/2.jpg" class="lightbox"><img src="img/gallery/small/2.jpg" alt="" class="img-responsive img-thumbnail" /></a>
                                    <a href="img/gallery/small/3.jpg" class="lightbox"><img src="img/gallery/small/3.jpg" alt="" class="img-responsive img-thumbnail" /></a>
                                </div>
                                <!-- Foot Recent Image --> 
                                <div class="foot-recent-img">
                                    <a href="img/gallery/small/1.jpg" class="lightbox"><img src="img/gallery/small/1.jpg" alt="" class="img-responsive img-thumbnail" /></a>
                                    <a href="img/gallery/small/2.jpg" class="lightbox"><img src="img/gallery/small/2.jpg" alt="" class="img-responsive img-thumbnail" /></a>
                                    <a href="img/gallery/small/3.jpg" class="lightbox"><img src="img/gallery/small/3.jpg" alt="" class="img-responsive img-thumbnail" /></a>
                                </div>
                                <div class="foot-recent-img">
                                    <a href="img/gallery/small/1.jpg" class="lightbox"><img src="img/gallery/small/1.jpg" alt="" class="img-responsive img-thumbnail" /></a>
                                    <a href="img/gallery/small/2.jpg" class="lightbox"><img src="img/gallery/small/2.jpg" alt="" class="img-responsive img-thumbnail" /></a>
                                    <a href="img/gallery/small/3.jpg" class="lightbox"><img src="img/gallery/small/3.jpg" alt="" class="img-responsive img-thumbnail" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- Foot Item -->
                        <div class="foot-item">
                            <!-- Heading -->
                            <h5 class="bold"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Contact Us</h5>
                            <!-- Foot Item Content -->
                            <div class="foot-item-content address">
                                <!-- Heading -->
                                <h6 class="bold"><i class="fa fa-home"></i>&nbsp;&nbsp;Hanks Ltd</h6>
                                <!-- Paragraph -->
                                <p class="add">
                                   Bharathi Nagar, South Cherry Road,<br />
                                   North Bangalore - 535089.</p>
                                <p class="tel"> <i class="fa fa-phone"></i> Tel : + (833) - 839 8393<br />
                                <i class="fa fa-envelope"></i>  Mail : <a href="#">infodesk@uk.com</a><br />
                                <i class="fa fa-calendar"></i> Business Hours : 9:30 - 5:30</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Starts -->
        <footer>
            <!-- Container -->
            <div class="container">
                <!-- Footer Content -->
                    <!-- Paragraph -->
                    <p class="pull-left">Copyright &copy; 2014 - <a href="#">Your Site</a></p>
                    <ul class="list-inline pull-right">
                        <!-- List -->
                        <li><a href="index.html">Home</a><li>
                        <li><a href="service.html">Service</a></li>
                        <li><a href="feature.html">Features</a></li>
                        <li><a href="about-us.html">About</a></li>
                        <li><a href="contact-us.html">Contact</a></li>
                    </ul>
                    <!-- Clearfix -->
                    <div class="clearfix"></div>
            </div>
        </footer>
    </div><!-- end outer-->

    <!-- Scroll to top -->
    <span class="totop"><a href="#"><i class="fa fa-angle-up bg-color"></i></a></span>

    <?= $this->Html->script('jquery.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('placeholders.js') ?>
    <?= $this->Html->script('jquery.magnific-popup.min.js') ?>
    <?= $this->Html->script('owl.carousel.min.js') ?>
    <?= $this->Html->script('respond.min.js') ?>
    <?= $this->Html->script('html5shiv.js') ?>
    <?= $this->Html->script('main.js') ?>
    <?= $this->fetch('script') ?>
</body>
</html>
