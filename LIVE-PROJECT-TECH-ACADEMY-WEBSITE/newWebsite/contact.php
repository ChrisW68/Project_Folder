<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact</title>
</head>

<body class="text-center">
<!-- 3/28/16: Placed Header Code into a separate PHP file named "header.php" allows all webpages to 
    	          share the same code. -->
		<div id="main-content" style="display:none;">
        	<header class="header">
				<?php include ("header.php");?>						
        	</header>
        </div>
   
<!-- Start Tiles -->
    <div>
        <div class="row">
            <div class="col-lg-7" id="contactForm">
				
				<p style="font-weight: bold; letter-spacing: 4px;">CONTACT US!</p>
                    
                <form method="POST" action="http://plus.allforms.mailjol.net/u/b1749119.php">

					<div class="questions form-group">
						<div id="selectBox"><input id="Name" type="text" name="Name" class="form-control" placeholder="ENTER YOUR NAME" required />
						</div>
					</div>
					<div class="questions form-group">
						<div id="selectBox"><input id="Email" type="text" name="Email" class="form-control" placeholder="ENTER YOUR EMAIL: you@yourdomain.com" required />
						</div>
					</div>
					<div class="questions form-group">
						<div id="selectBox"><input id="Phone" type="text" name="Phone" class="form-control" placeholder="ENTER YOUR PHONE NUMBER" required />
						</div>
					</div>
					<div class="questions form-group">
						<div id="selectBox" class="questions"><textarea id="Message" name="Message" placeholder="ENTER YOUR MESSAGE" style="text-align: left;" required></textarea>
						</div>
					</div>
					<div class="questions form-group">
						<div id="selectBox" class="questions"><input id="Ad" name="ad" class="form-control" placeholder="HOW DID YOU HEAR ABOUT US" required />
						</div>
					</div>
					<div class="text-center"><button type="submit" id="submitButton" class="btn btn-default">SUBMIT</button>
                        <p></p>
                        <br />
                        <br />
                        <br />
					</div>
				</form>
            </div>
            
        
			<!-- Contact Info -->
			<div class="col-lg-5 newTiledInfoBlack" id="contactInfo">
				<i class="fa fa-envelope fa-3x slideanim"></i>
				<p>info@learncodinganywhere.com</p>
				<br />
                <br />
				<i class="fa fa-phone fa-3x slideanim"></i>
				<p>503.206.6915</p>
				<br />
                <br />
				<i class="fa fa-building fa-3x slideanim"></i><br />
				<p>310 SW 4th Ave Suite 412<br />Portland, OR 97204</p>
				<br />
                <br />
				<p>
				Are you in Portland?<br />
				Come in for a tour!<br />
				<em>
				(Fourth floor of the Board of Trade building)
				</em>
				</p>
			</div>
        </div>
    </div>
    <!--  Site footer  -->
    
    <!-- 3/28/16: Placed Footer Code into a separate PHP file named "footer.php" allows all webpages to 
    	          share the same code. -->
                  
    <footer class="footer">			
  		<?php include("footer.php"); ?>
    </footer>
		<!--
        <div class="col-lg-6 text-right">
            <p>© The Tech Academy 2015</p>
			<div id="___page_0" style="text-indent: 0px; margin: 0px; padding: 0px; background-color: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 300px; height: 352px; background-position: initial initial; background-repeat: initial initial;"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 300px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 352px;" tabindex="0" vspace="0" width="100%" id="I0_1453928962300" name="I0_1453928962300" src="https://apis.google.com/_/widget/render/page?usegapi=1&href=%2F%2Fplus.google.com%2Fu%2F0%2F108407477315781502466&rel=publisher&origin=http%3A%2F%2Flearncodinganywhere.com&gsrc=3p&ic=1&jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en_US.EUHM0okOSao.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Ft%3Dzcms%2Frs%3DAGLTcCOtX4SuyVD7gCm8N-17I91Nqq-HDQ#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&id=I0_1453928962300&parent=http%3A%2F%2Flearncodinganywhere.com&pfname=&rpctoken=27015051" data-gapiattached="true" title="+Badge"></iframe></div>
        </div>

		-->
    </footer>
	
	<!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
_atrk_opts = { atrk_acct:"jT90m1a8FRh2cN", domain:"learncodinganywhere.com",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=jT90m1a8FRh2cN" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->  

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/npm.js"></script>
	<script>
		$(document).ready(function() {
			var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
			if (w <657) {
				$(".form-control").removeAttr("placeholder");
			}
			$(window).ready(function () { $(window).scroll() });
			$(window).scroll(function () {
			    $(".slideanim").each(function () {
			        var pos = $(this).offset().top;

			        var winTop = $(window).scrollTop();
			        if (pos < winTop + $(window).height()) {
			            $(this).addClass("slide");
			        }
			    });
			});
		});
		
			
	</script>
</body>
</html>
