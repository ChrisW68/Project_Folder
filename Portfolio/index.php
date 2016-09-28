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
        <link href="https://fonts.googleapis.com/css?family=Vast+Shadow" rel="stylesheet">
        <!-- <script src="jQueryAssets/SpryDOMUtils.js" type="text/javascript"></script> -->
        <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="index.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="content-block" id="header">
            <div id="overlay-1">
                <header id="site-header" class="clearfix">
                    <div class="pull-left">
                        <h1 class="talent pulse">Software Developer - Web Developer - Software Designer</h1>
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
                                    <li><a href="#portfolio"><i class="fa fa-bookmark"></i> Development Skills</a></li>
                                    <li><a href="#services"><i class="fa fa-bullhorn"></i> Me</a></li>
                                    <li><a href="#testimonials"><i class="fa fa-bookmark"></i> Soft Skills</a></li>
                                    <li><a href="#contact"><i class="fa fa-phone-square"></i> Contact</a></li>
                                </ul>
                            </div>  <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                </header>	<!-- site-header -->
                
                <div class="middle text-center clearfix">
                    <div class="container-fluid fill-height">
                   	  <center><img src="img/IMG_8665.jpg" alt="mypix" id="my_image" class="img-circle" title="Chris Wiseman"/></center>
                        <center><h1 class="name">Chris Wiseman</h1></center>
                        <center><p class="tagline">Software Developer - Web Developer</p></center>
                        <a href="#contact" target="_blank" class="btn btn-lg btn-hire wow animated zoomIn">Contact Me!</a>
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
                <p class="wheretopress">(Press programming logos for more detail)</p>
                <!-- <p>Take a look at some of my recent products</p> -->
            </header>

            <div class="isotope portfolio-items">
                <div class="element-item grid">
                    <div class="portfolio-item effect-zoe">
                    	<?php include ("php/htmlCss.php");?>
                    </div>
                </div>
                <div class="element-item grid">
                    <div class="portfolio-item effect-zoe">
                      <?php include ("php/PHPskills.php");?>
                    </div>
                </div>
                <div class="element-item grid">
                    <div class="portfolio-item effect-zoe">
                      <?php include ("php/SQLskills.php");?>
                    </div>
                </div>
                <div class="element-item grid">
                    <div class="portfolio-item effect-zoe">
                      <?php include ("php/Pythonskills.php");?>
                    </div>
                </div>
              </div>
                <center><div class="row">
                      <center><div class="col-md-3">
                          <div class="portfolio-item effect-zoe">
                            <?php include ("php/MVC.php");?>
                          </div>
                      </div></center>
                      <center><div class="col-md-3">
                          <div class="portfolio-item effect-zoe">
                            <?php include ("php/JavaScript.php");?>
                          </div>
                      </div></center>
                      <center><div class="col-md-3">
                          <div class="portfolio-item effect-zoe">
                            <?php include ("php/WorkInProgress.php");?>
                      	  </div>
                	  </div></center>
                </div></center>
            </div>	<!-- isotope portfolio-items -->
            <center><a href="#contact" class="btn btn-lg btn-view">
                <i class="fa fa-eye"></i>
                <span><center>If you're interested</br> contact me!</center></span>
            </a></center>
        </div>  <!-- content-block -->
        <div id="services" class="content-block">
            <div id="numbers" class="parallax">
                <div class="overlay">
                    <!-- title -->
                    <?php include ("php/about-me.php");?>      
                </div><!-- overlay end -->
            </div>
            <center><a href="#contact" class="btn btn-lg btn-view">
                <i class="fa fa-eye"></i>
                <span><center>If you're interested</br> contact me!</center></span>
            </a></center>
        </div><!-- content-block -->
        <div class="content-block" id="testimonials">
            <header class="block-heading cleafix text-center">
                <h1>Soft Skills</h1>
                <!-- <p>Lorem Ipsum Text</p> -->
            </header>
            <div class="block-content text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                        	<?php include ("php/project-management.php");?>
						</div>	
                        <div class="col-md-3">
                       	  <?php include ("php/time-management.php");?>      
                        </div>
                        <div class="col-md-3">
                       	  <?php include ("php/big-data.php");?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>	<!-- row -->
            </div>	<!-- container -->
        </div>	<!-- block-content -->
        <center><a href="#contact" class="btn btn-lg btn-view">
                <i class="fa fa-eye"></i>
                <span><center>If you're interested </br>contact me!</center></span>
            </a></center>
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
                                        <li><a class="github-icon" href="https://github.com/ChrisW68"><i class="fa fa-github"></i></a></li>
                                        <li><a class="linkedin-icon" href="https://www.linkedin.com/in/mrwiseman"><i class="fa fa-linkedin"></i></a></li>
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
