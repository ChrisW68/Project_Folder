<!DOCTYPE html>
<html lang="en-us">
    <head>
    	<title>Developer</title>

    	<!-- meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- stylesheet -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.theme.min.css">
        <link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/main.css">

		<!-- google font -->
        <link href='http://fonts.googleapis.com/css?family=Oswald:300,400' rel='stylesheet'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Rouge+Script" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Milonga' rel='stylesheet' type='text/css'>
    <script src="jQueryAssets/SpryDOMUtils.js" type="text/javascript"></script>
    <script src="index.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="content-block" id="header">
            <div id="overlay-1">
                <header id="site-header" class="clearfix">
                    <div class="pull-left">
                        <h1><a href="#">Software Developer</a></h1>
                    </div>
                    <div class="pull-right">
                        <nav class="navbar site-nav" role="navigation">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <i class="fa fa-bars fa-2x"></i>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#header"><i class="fa fa-home"></i> <span>Home</span></a></li>
                                    <li><a href="#portfolio"><i class="fa fa-bookmark"></i> Portfolio</a></li>
                                    <li><a href="#services"><i class="fa fa-bullhorn"></i> Me</a></li>
                                    
                                    <li><a href="#contact"><i class="fa fa-phone-square"></i> Contact</a></li>
                                </ul>
                            </div>  <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                </header>	<!-- site-header -->
                
                <div class="middle text-center clearfix">
                    <div class="container">
                        <h1 class="pro-name">Chris <!-- <span style="color: #71b644;" > -->Wiseman<!-- </span> --></h1>
                        <p class="tagline">Software Developer - Web Developer</p>
                        <div class="skills">

                        </div>  <!-- skills -->
                        <a href="#contact" target="_blank" class="btn btn-lg btn-hire wow animated zoomIn">Hire Me</a>
                    </div>  <!-- container -->
                </div>  <!-- middle -->
                
                <div class="bottom text-center">
                    <a href="#portfolio"><i class="fa fa-angle-down fa-3x pulse"></i></a>
                </div>
            </div>  <!-- overlay-1 -->
        </div>  <!-- content-block -->

        <div class="content-block text-center" id="portfolio">
            <header class="block-heading cleafix">
                <h1>Development Skills</h1>
                <!-- <p>Take a look at some of my recent products</p> -->
            </header>

            <div class="isotope portfolio-items">
                <div class="element-item grid">
                  <div class="effect-zoe">
                        <img class="img-responsive" alt="Portfolio" src="img/HTMLCSS-logo.jpg" height="90%">
                    	<?php include ("php/htmlCss.php");?>
                        
                    </div>
                </div>
                <div class="element-item grid">
                    <div class="portfolio-item effect-zoe">
                      <img class="img-responsive" alt="Portfolio" src="img/PHP-logo.jpg">
                      <a href="#"  data-toggle="modal" data-target="#modal1" class="btn btn-default" role="button">Open Modal Pop-up</a>
                      <div id="modal1" class="modal fade" tabindex="-1" role="dialog" area-label="modalheading1">
                        <div class="modal-dialog modal-md" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span area-hidden="true">&times;</span></button>
                              <h3 class="modal-title" id="modalheading1">Some of my work in PHP!</h3>
                            </div>
                            <div class="modal-body"> 
                            <figcaption>
  								<h3><b>Here is some of my work!</b></h3>
                            <ul>
                              <li><a href="https://github.com/ChrisW68/LIVE-PROJECT-TECH-ACADEMY-WEBSITE">Live Project</a></li>
                              <li><a href="https://github.com/ChrisW68/Project_Folder/tree/master/AJAX%20%26%20PHP%20Chat%20messenger">Instant Messenger!</a></li>
                            </ul>
                            </p>
                          </figcaption>
                            </div>
                            <div class="modal-footer" data-dismiss="modal">
                              <button class="btn btn-primary">Cancel</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="element-item grid">
                    <div class="portfolio-item effect-zoe">
                        <img class="img-responsive" alt="Portfolio" src="img/Python-logo.jpg" height="100%">
                        <?php include ("php/Pythonskills.php");?>
                  </div>
                </div>
                <div class="element-item grid">
                    <div class="portfolio-item effect-zoe">
                        <img class="img-responsive" alt="Portfolio" src="img/SQL-logo.jpg" height="90%">
                        <?php include ("php/htmlCss.php");?>
                    </div>
                </div>
                <div class="element-item grid">
                    <div class="portfolio-item effect-zoe">
                        <img class="img-responsive" alt="Portfolio" src="img/work8.png">
                        <?php include ("php/htmlCss.php");?>
                    </div>
                </div>
                <div class="element-item grid">
                    <div class="portfolio-item effect-zoe">
                        <img class="img-responsive" alt="Portfolio" src="img/work4.jpg">
                        <?php include ("php/htmlCss.php");?>
                    </div>
                </div>
                <div class="element-item grid">
                    <div class="portfolio-item effect-zoe">
                        <img class="img-responsive" alt="Portfolio" src="img/work5.jpg">
                        <?php include ("php/htmlCss.php");?>
                    </div>
                </div>
                <div class="element-item grid">
                    <div class="portfolio-item effect-zoe">
                        <img class="img-responsive" alt="Portfolio" src="img/workinprogress-image.jpg">
                        <?php include ("php/htmlCss.php");?>
                    </div>
                </div>
            </div>	<!-- isotope portfolio-items -->
            <a href="#" class="btn btn-lg btn-view">
                <i class="fa fa-eye"></i>
                <span>View All</span>
            </a>
        </div>  <!-- content-block -->

       <!--  <div class="content-block text-center" id="services">
            <div class="overlay-2">
                        <header class="block-heading cleafix">
                            <h1>More About Me</h1>
                            <p>Lorem Ipsum Text</p>
                        </header>
                        <div class="block-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                <div class="row ">
                                    <div class="col-sm-4">
                                        <h4 class="pro-stat">Completed Project</h4>
                                        <h2 class="proj-name count1 count-timer" >020</h2>
                                    </div>
                                    <div class="col-sm-4">
                                        <h4 class="pro-stat">Working Project</h4>
                                        <h2 class="proj-name count2">9</h2>
                                    </div>
                                    <div class="col-sm-4">
                                        <h4 class="pro-stat">Top Rated Project</h4>
                                        <h2 class="proj-name count3">015</h2>
                                    </div>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    overlay-2
        </div>  --> <!-- content-block -->
        <div id="services" class="content-block">
            <div id="numbers" class="parallax">
                <div class="overlay">
                    <!-- title -->
                    <div class="container-fluid numbers-title">
                        <div class="container">
                            <div class="row block-heading">
                                <h1>Some Cool Facts About Me</h1>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        
                    </div><!-- container-fluid end -->
                </div><!-- overlay end -->
            </div>
        </div>
            

        <div class="content-block" id="testimonials">
            <header class="block-heading cleafix text-center">
                <h1>What Clients Say</h1>
                <!-- <p>Lorem Ipsum Text</p> -->
            </header>
            <div class="block-content text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                        	<div class="owl-carousel">
								<div class="owl-item">
									<div class="testimonial">
                                        <img alt="Client Photo" src="img/testimonial_31-190x190.jpg">
                                        <p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec, sodales nibh. Etiam nulla magna, gravida eget ultricies sit amet.</p>
                                        <strong>Jhon Doe</strong><br>
                                        <span>Head of Ideas, Technext</span>
                                    </div>
								</div>	<!-- owl-item -->
								<div class="owl-item">
									<div class="testimonial">
                                        <img alt="Client Photo" src="img/testimonial_11-190x190.jpg">
                                        <p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec, sodales nibh. Etiam nulla magna, gravida eget ultricies sit amet.</p>
                                        <strong>Jane Doe</strong><br>
                                        <span>CEO, Apple Inc</span>
                                    </div>
								</div>	<!-- owl-item -->
								<div class="owl-item">
									<div class="testimonial">
                                        <img alt="Client Photo" src="img/testimonial_22-190x190.jpg">
                                        <p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec, sodales nibh. Etiam nulla magna, gravida eget ultricies sit amet.</p>
                                        <strong>Albert Doe</strong><br>
                                        <span>Team Lead, Design Studio</span>
                                    </div>
								</div>	<!-- owl-item -->
							</div>	<!-- owl-carousel -->
						</div>	<!-- col-md-12 -->
                    </div>	<!-- row -->
                </div>	<!-- container -->
            </div>	<!-- block-content -->
        </div>	<!-- content-block -->

        <div class="content-block" id="contact">
            <div class="overlay-3">
                <header class="block-heading cleafix text-center">
                    <h1>Contact</h1>
                    <!-- <p>Feel Free to Contact</p> -->
                </header>
                <div class="block-content text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 wow animated fadeInLeft">
                                <form class="contact-form" action="form.php">
                                    <input type="text" name="name" placeholder="Name" required>
                                    <input type="email" name="email" placeholder="Email" required>
                                    <textarea rows="5" name="message" placeholder="Say Something..." required></textarea>
                                    <input type="submit" value="Submit">
                                </form>
                            </div>
                            <div class="col-md-6 wow animated fadeInRight">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="contact-info">
                                            <div class="clearfix">
                                                <div class="rotated-icon">
                                                    <div class="sqaure-nebir"></div>
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                                <p><strong> Address:</strong> Portland, OR.
                                                </p>
                                            </div>
                                            <div class="clearfix">
                                                <div class="rotated-icon">
                                                    <div class="sqaure-nebir"></div>
                                                    <i class="fa fa-mobile"></i>
                                                </div>
                                                <p><strong> Cell No:</strong> 916-759-4893 </p>
                                            </div>
                                            <div class="clearfix">
                                                <div class="rotated-icon">
                                                    <div class="sqaure-nebir"></div>
                                                    <i class="fa fa-envelope-o"></i>
                                                </div>
                                                <p>
                                                    <strong> Email:</strong> chris.wiseman74@gmail.com
                                              </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <ul class="social-box">
                                        <li><a class="facebook-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="g-plus-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a class="linkedin-icon" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	<!-- block-content -->
            </div>	<!-- overlay-3 -->
        </div>	<!-- content-block -->

        <footer id="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="copyright">&copy; 2014 Developer</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="designed-by">Designed By <a href="http://themewagon.com/" target="_blank">ThemeWagon</a></div>
                    </div>
                </div>
            </div>
        </footer>	<!-- site-footer -->


        <!-- js -->
        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.actual.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.isonscreen.js"></script>
       
        <script src="js/main.js"></script>
</body>
</html>
