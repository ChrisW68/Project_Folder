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
                   	  <center><img src="img/IMG_8665.jpg" alt="mypix" id="my_image" class="img-circle" title="Chris Wiseman"/></center>
                        <h1 class="name">Chris <!-- <span style="color: #71b644;" > -->Wiseman<!-- </span> --></h1>
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
                <p class="wheretopress">(Press programming logos for more detail)</p>
                <!-- <p>Take a look at some of my recent products</p> -->
            </header>

            <div class="isotope portfolio-items">
                <div class="element-item grid">
                    <div class="portfolio-item">
                      <a href="#"  data-toggle="modal" data-target="#modal2" class="btn btn-default" role="button"><img src="img/HTMLCSS-logo.jpg" height="175px" alt="HTMLCSSlogo"/></a>
                      <div id="modal2" class="modal fade" tabindex="-1" role="dialog" area-label="modalheading2">
                        <div class="modal-dialog modal-md" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span area-hidden="true">&times;</span></button>
                              <h3 class="modal-title" id="modalheading2">Modal Pop-up Title</h3>
                            </div>
                            <div class="modal-body"><?php include ("php/htmlCss.php");?></div>
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
                      <a href="#"  data-toggle="modal" data-target="#modal1" class="btn btn-default" role="button"><img src="img/PHP-logo.jpg" height="175px" alt="PHPlogo"/>p</a>
                        <div id="modal1" class="modal fade" tabindex="-1" role="dialog" area-label="modalheading1">
                          <div class="modal-dialog modal-md" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span area-hidden="true">&times;</span></button>
                                <h3 class="modal-title" id="modalheading1">Modal Pop-up Title</h3>
                              </div>
                              <div class="modal-body"><?php include ("php/PHPskills.php");?></div>
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
                      <a href="#"  data-toggle="modal" data-target="#modal3" class="btn btn-default" role="button"><img src="img/SQL-logo.jpg" height="175" alt="SQLlogo"/></a>
                        <div id="modal3" class="modal fade" tabindex="-1" role="dialog" area-label="modalheading3">
                          <div class="modal-dialog modal-md" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span area-hidden="true">&times;</span></button>
                                <h3 class="modal-title" id="modalheading3">Modal Pop-up Title</h3>
                              </div>
                              <div class="modal-body"><?php include ("php/SQLskills.php");?></div>
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
                      <a href="#"  data-toggle="modal" data-target="#modal4" class="btn btn-default" role="button"><img src="img/Python-logo.jpg" height="175" alt="Pythonlogo"/></a>
                        <div id="modal4" class="modal fade" tabindex="-1" role="dialog" area-label="modalheading4">
                          <div class="modal-dialog modal-md" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span area-hidden="true">&times;</span></button>
                                <h3 class="modal-title" id="modalheading4">Modal Pop-up Title</h3>
                              </div>
                              <div class="modal-body"><?php include ("php/Pythonskills.php");?></div>
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
                      <a href="#"  data-toggle="modal" data-target="#modal5" class="btn btn-default" role="button"><img src="img/net.png" height="175" alt="MVClogo"/></a>
                        <div id="modal5" class="modal fade" tabindex="-1" role="dialog" area-label="modalheading5">
                          <div class="modal-dialog modal-md" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span area-hidden="true">&times;</span></button>
                                <h3 class="modal-title" id="modalheading5">Modal Pop-up Title</h3>
                              </div>
                              <div class="modal-body"> <?php include ("php/MVC.php");?></div>
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
                      <a href="#"  data-toggle="modal" data-target="#modal6" class="btn btn-default" role="button"><img src="img/JavaScript.png" height="175" alt="JavaScriptlogo"/></a>
                        <div id="modal6" class="modal fade" tabindex="-1" role="dialog" area-label="modalheading6">
                          <div class="modal-dialog modal-md" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span area-hidden="true">&times;</span></button>
                                <h3 class="modal-title" id="modalheading6">Modal Pop-up Title</h3>
                              </div>
                              <div class="modal-body"><?php include ("php/JavaScript.php");?></div>
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
                      <a href="#"  data-toggle="modal" data-target="#modal7" class="btn btn-default" role="button"><img src="img/workinprogress-image.jpg" height="175px" alt="workInProgressLogo"/></a>
                        <div id="modal7" class="modal fade" tabindex="-1" role="dialog" area-label="modalheading7">
                          <div class="modal-dialog modal-md" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span area-hidden="true">&times;</span></button>
                                <h3 class="modal-title" id="modalheading7">Modal Pop-up Title</h3>
                              </div>
                              <div class="modal-body"><?php include ("php/WorkInProgress.php");?></div>
                              <div class="modal-footer" data-dismiss="modal">
                                <button class="btn btn-primary">Cancel</button>
                              </div>
                            </div>
                          </div>
                        </div>
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
                                <h1>Some Cool Facts About Me(at least I think so)</h1>
                            </div>
                            <p class="about-me col-md-6" align="left">I started my career as a Manufacturing Engineer.</br>
                            I loved getting my hands dirty and figuring out how things tick,</br>
                            most of the time having to reverse engineer before figuring out how they worked.</br>
                            I'm curious by nature.  Enjoy being challenged and finding solutions to problems.</br>
                            When not programming:</br>
							I enjoy working on my house (always making it just a little more energy efficient and adding unique touches).</br>		Trying (I do mean TRYING) to grow something in my vegetable garden</br>
                            When I have time, I find new places to explore hiking/cross-country/canoeing/paddle boarding.</p>  
                        </div>
                    </div>
                    <div class="container-fluid">
                        
                    </div><!-- container-fluid end -->
                </div><!-- overlay end -->
            </div>
        </div>
            

        <div class="content-block" id="testimonials">
            <header class="block-heading cleafix text-center">
                <h1>Soft Skills</h1>
                <!-- <p>Lorem Ipsum Text</p> -->
            </header>
            <div class="block-content text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-md-offset-2">
                        	<a href="#"  data-toggle="modal" data-target="#modal9" class="btn btn-default" role="button"><img alt="Project management" src="img/PM-logo.jpg" height="250px"></a>
                            <div id="modal9" class="modal fade" tabindex="-1" role="dialog" area-label="modalheading9">
                              <div class="modal-dialog modal-md" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span area-hidden="true">&times;</span></button>
                                    <h3 class="modal-title" id="modalheading9">Modal Pop-up Title</h3>
                                  </div>
                                  <div class="modal-body"><?php include ("php/project-management.php");?></div>
                                  <div class="modal-footer" data-dismiss="modal">
                                    <button class="btn btn-primary">Cancel</button>
                                  </div>
                                </div>
                              </div>
                            </div>
						</div>	<!-- col-md-12 -->
                        <div class="col-md-2 col-md-offset-2">
                       	  <a href="#"  data-toggle="modal" data-target="#modal8" class="btn btn-default" role="button"><img alt="Time management" src="img/time management copy.jpg" height="250px"></a>
                          <div id="modal8" class="modal fade" tabindex="-1" role="dialog" area-label="modalheading8">
                              <div class="modal-dialog modal-md" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span area-hidden="true">&times;</span></button>
                                    <h3 class="modal-title" id="modalheading8">Modal Pop-up Title</h3>
                                  </div>
                                  <div class="modal-body">
                                  	<?php include ("php/time-management.php");?>
                                  </div>
                                  <div class="modal-footer" data-dismiss="modal">
                                    <button class="btn btn-primary">Cancel</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-md-offset-2">
                       	  <a href="#"  data-toggle="modal" data-target="#modal10" class="btn btn-default" role="button"><img alt="data" src="img/bigdata.jpg" height="250px"></a>
                          <div id="modal10" class="modal fade" tabindex="-1" role="dialog" area-label="modalheading8">
                              <div class="modal-dialog modal-md" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span area-hidden="true">&times;</span></button>
                                    <h3 class="modal-title" id="modalheading8">Modal Pop-up Title</h3>
                                  </div>
                                  <div class="modal-body">
                                  	<?php include ("php/time-management.php");?>
                                  </div>
                                  <div class="modal-footer" data-dismiss="modal">
                                    <button class="btn btn-primary">Cancel</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
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
