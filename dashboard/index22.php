<!doctype html>
<html class="no-js" lang="en">
<?php
	
	
	 require_once "../db.php";
 
   $select="SELECT *FROM social WHERE status='active'";
   $querydata=mysqli_query($db,$select);
	
	
	
	 $selectservice="SELECT *FROM services WHERE status=1";
   $service_querydata=mysqli_query($db,$selectservice);
	 $selectsettings="SELECT *FROM settings ";
   $settings_querydata=mysqli_query($db,$selectsettings);
	$settingdata=mysqli_fetch_assoc( $settings_querydata);
	 $selecteducation="SELECT *FROM education WHERE status='active' ORDER BY year DESC";
   $educationquerydata=mysqli_query($db,$selecteducation);
	 $selectportfolio="SELECT *FROM portfolios WHERE status=1 ";
   $portfolioquerydata=mysqli_query($db,$selectportfolio);
	$selectpartners="SELECT *FROM partners WHERE status=1 ";
   $partnerquerydata=mysqli_query($db,$selectpartners);
		$selectcounters="SELECT *FROM counters WHERE status=1 ";
   $counterquerydata=mysqli_query($db,$selectcounters);
	$selectcounters="SELECT *FROM brands WHERE status=1 ";
   $brandquerydata=mysqli_query($db,$selectcounters);
	$selectcontact="SELECT *FROM contacts WHERE status=1 ";
	 $contactquerydata=mysqli_query($db,$selectcontact);
	?>
<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kufa - Personal Portfolio HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="../front/css/bootstrap.min.css">
        <link rel="stylesheet" href="../front/css/animate.min.css">
        <link rel="stylesheet" href="../front/css/magnific-popup.css">
      
      
     
        <link rel="stylesheet" href="../front/css/slick.css">
        <link rel="stylesheet" href="../front/css/aos.css">
        <link rel="stylesheet" href="../front/css/default.css">
        <link rel="stylesheet" href="../front/css/style.css">
        <link rel="stylesheet" href="../front/css/responsive.css">
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <a href="index.html" class="navbar-brand logo-sticky-none">
                                    <img src="logo/<?=$settingdata['logo']?>" alt="Logo"></a>
                                    <a href="index.html" class="navbar-brand s-logo-none">
									<img src="logo/<?=$settingdata['logo']?>" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-btn">
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index-2.html">
                        <img src="img/logo/logo.png" alt="" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p>123/A, Miranda City Likaoli
                            Prikano, Dope</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p>+0989 7876 9865 9</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p>info@example.com</p>
                    </div>
                </div>
                <div class="social-icon-right mt-20">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am Will Smith</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s">
                                <?=$settingdata['tagline']?></p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                        <?php
										  foreach($querydata as $key=>$value):?>
                                        <li><a target="_blank" href="<?=$value['link']?>"><i class="<?=$value['icon'] ?>"></i></a></li>
                                        <?php endforeach?>
                                    </ul>
                                </div>
                                <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img src="../front/img/banner/banner_img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="../front/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="../front/img/banner/banner_img2.png" title="me-01" alt="me-01">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2>About Me</h2>
                            </div>
                            <div class="about-content">
                                <p><?=$settingdata['about']?></p>
                                <h3>Education:</h3>
                            </div>
                            
                            <?php foreach( $educationquerydata as $key =>$value) :?>
                            <!-- Education Item -->
                            <div class="education">
                                <div class="year"><?=$value['year']?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?=$value['title']?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width:<?=$value['progress']?>%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach?>
                           
                            <!-- End Education Item -->
                            <!-- Education Item -->
                            
                            <!-- End Education Item -->
                            <!-- Education Item -->
                           
                            <!-- End Education Item -->
                            <!-- Education Item -->
                          
                            <!-- End Education Item -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">
					<?php foreach($service_querydata as $key=>$value):?>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="<?=$value['icon']?>"></i>
								<h3><?=$value['name']?></h3>
								<p>
									<?=$value['summary']?>
								</p>
							</div>
						</div>
					<?php endforeach ?>	
						
						
						
						
					</div>
				</div>
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       <?php foreach($portfolioquerydata as $key => $value): ?>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="images/<?=$value['thumbnail']?>" alt="img">
								</div>
								<div class="speaker-overlay">
									<span><?=$value['category']?></span>
									<h4><a  target="_blank" href="portfolio-single.php?id=<?=$value['id']?>"><?=$value['title']?></a><?=$value['title']?></h4>
									<a  target="_blank" href="portfolio-single.php?id=<?=$value['id']?>" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                          <?php endforeach ?>
                        
                    </div>
                </div>
            </section>
            <!-- services-area-end -->


            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">
                             <?php foreach($counterquerydata as $key => $value): ?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="<?=$value['icon']?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?=$value['value']?></span></h2>
                                        <span><?=$value['name']?></span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                           
                        
                           
                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">
                               <?php foreach($partnerquerydata as $key=>$value):?>
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img src="partners/<?=$value['photo']?>" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span><?=$value['message']?><span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?=$value['name']?></h5>
                                            <span><?=$value['designation']?></span>
                                        </div>
                                    </div>
                                </div>
                              <?php endforeach ?> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Partners</span>
                                <h2>Work With</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row brand-active">
                     <?php foreach($brandquerydata as $key=>$value):?>
                      
                        <div class="col-xl-2 slick-slide slick-cloned">
                             
                             
                            <div class="single-brand">
                                <img src="brandimage/<?=$value['picture']?>" alt="img">
                            </div>
                             
                           
                        </div>
                       <?php endforeach ?>  
                       
                    
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.</p>
                                <h5>OFFICE IN <span>NEW YORK</span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span>
                                        <?=$settingdata['office_address']?></li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span> 
                                        <?=$settingdata['phone']?></li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span> 
                                        <?=$settingdata['email']?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form action="contact-post.php" method="post">
                                    <input type="text" placeholder="your name *" name="name" id="name">
                                    <input type="email" placeholder="your email *" name="email" id="email">
                                    <textarea name="message" id="message" placeholder="your message *"></textarea>
                                    <button class="btn">SEND</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->





		<!-- JS here -->
        <script src="../front/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="../front/js/popper.min.js"></script>
        <script src="../front/js/bootstrap.min.js"></script>
        <script src="../front/js/isotope.pkgd.min.js"></script>
        <script src="../front/js/one-page-nav-min.js"></script>
        <script src="../front/js/slick.min.js"></script>
        <script src="../front/js/ajax-form.js"></script>
        <script src="../front/js/wow.min.js"></script>
        <script src="../front/js/aos.js"></script>
        <script src="../front/js/jquery.waypoints.min.js"></script>
        <script src="../front/js/jquery.counterup.min.js"></script>
        <script src="../front/js/jquery.scrollUp.min.js"></script>
        <script src="../front/js/imagesloaded.pkgd.min.js"></script>
        <script src="../front/js/jquery.magnific-popup.min.js"></script>
        <script src="../front/js/plugins.js"></script>
        <script src="../front/js/main.js"></script>
    </body>

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->
</html>
