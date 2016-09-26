<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About</title>
<body>	
<!-- 3/28/16: Placed Header Code into a separate PHP file named "header.php" allows all webpages to 
    	          share the same code. -->
		<header class="header">
			<?php include ("header.php");?>						
        </header>
        
        <!-- Start Tiles -->
        <div class="row tiles text-justify slideanim" id="first"><!-- Start Row 1 -->
            <div class="col-lg-6">
                <h2 class="text-center">THE TECH ACADEMY</h2>
                <h3 class="text-center">A NEW APPROACH TO TRAINING IN TECHNOLOGY</h3>
                <p>Erik Gross has been involved in technology since the 1980s. He worked in the navy as a nuclear reactor operator and taught classes there in computer science, nuclear physics, advanced mathematics, and other subjects. It was during his tenure in the service that he discovered his love for teaching others.</p>
                <p><img src="images/PITC.png" class="right hidden-sm hidden-xs" />Several years ago, Erik established his own software development company called Prosper I.T. Consulting. As he began pulling in more and more contracts, he discovered a need for junior-level programmers to assist him on these projects. Erik observed a lack of available talent and so began personally training individuals on the side to work with him.</p>
                <p><img src="images/PITA.png" class="left hidden-sm hidden-xs" />In 2012, Erik discovered programming boot camps that were beginning to crop up in the California Bay Area. It was then that Erik decided to turn his training of software developers into a formal activity, and so “Prosper I.T. Academy was formed”.</p>
                <p id="location_1">Between 2012 and the end of 2013, Erik trained entry-level developers and created a framework for a curriculum.</p> 
                <p>Erik decided to devote his full attention to the code school and recognized that taking the venture to the next level would take business acumen and managerial experience. He then approached his longtime friend, and seasoned executive, Jack Stanley.</p>
            </div>
            <div class="col-lg-6">
                <img src="images/About_1.png" class="img_fit" id="img_1"/>
            </div>   
        </div><!-- End Row 1 -->
        
        <div class="row text-justify slideanim"><!-- Start Row 2 -->
            <div class="col-lg-6">
                <img src="images/About_2.png" class="img_fit" />
            </div>  
            <div class="col-lg-6">
                <p>For several months, Jack Stanley and Erik Gross worked together to perfect the curriculum and fully establish the school.</p>
                <p><img src="images/Tech_Academy_Logo.png" style="width:200px;" class="right hidden-sm hidden-xs"/>In the beginning of 2014, Prosper I.T. Academy then became “The Tech Academy”. At this time, there were about ten students attending and The Tech Academy was located in Beaverton Oregon.</p>
                <p>Jack Stanley had years of experience running successful companies and business ventures, and where Erik held senior tech skills, Jack excelled in administrative abilities. Additionally, Erik and Jack had already previously worked together on several earlier projects to great success.</p>
            </div> 
        </div><!-- End Row 2 -->
        
        <div class="row text-justify slideanim"><!-- Start Row 3 -->
			<div class="col-lg-6 hidden-md hidden-lg">
                <img src="images/About_3.png" class="img_fit" />
            </div>   
            <div class="col-lg-6">
                <p>The curriculum that Erik and Jack developed has been reviewed by several qualified parties, including individuals with degrees in Computer Science. As a matter of fact, Dr. Brent Wilson (Professor of Computer Science for George Fox University) is a curriculum advisor for The Tech Academy.</p>
                <p>As it stands today, The Tech Academy’s Software Developer Boot Camp has graduated and enrolled hundreds of students. Due to how the curriculum is designed and the teaching methods we use, students are able to learn a tremendous quantity of technical skills in a relatively short period of time – making The Tech Academy’s curriculum one of the most comprehensive and large programs out of any boot camp</p>
            </div>
            <div class="col-lg-6 hidden-sm hidden-xs">
                <img src="images/About_3.png" class="img_fit" />
            </div>   
        </div><!-- End Row 3 -->
        <div class="row slideanim"><!-- Start Row 4 -->
            <div class="col-lg-12">
                <p>Here is a video that covers The Tech Academy and its program in detail:</p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/goznrmb5gls"  id="iframeOtherPages" frameborder="0" allowfullscreen></iframe>
                <p>If you have any questions or would like any additional information,
                    <a href="contact.html">please contact us now.</a></p>
            </div>
            
        </div><!-- End Row 4 -->
        
        <div class="banner row">
                <h3>15 week Software Developer Boot Camp</h3>
                <h2><a href="contact.html">Enroll Now and START TODAY</a></h2>
        </div>
    

    <!--  Site footer  -->
    
    <!-- 3/28/16: Placed Footer Code into a separate PHP file named "footer.php" allows all webpages to 
    	          share the same code. -->
                  
    <footer class="footer">			
  		<?php include("footer.php"); ?>
    </footer>

    </div> <!-- /container -->
    
    <!-- 3/28/16: Placed Modal into a separate PHP file name "Modal-Content.php" allow all webpages share 
    			  the same code -->
                  
    <div id="Modal">
		<?php include("Modal-Content.php"); ?>
	</div>
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
		<//script>
		$(document).ready(function() {
			var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
			if (w <657) {
				$('#img_1').insertBefore('#location_1');
			}
			function waitThenDoSomething(waitTimeInMS, myAction) {
			    setTimeout(function () {
			        if (myAction == "displayPopup") {
			            $('#myModalPopUp').modal('show');
			        }
			    }, waitTimeInMS); //time in ms to wait before modal dialog box shows up.
			}
			if (document.referrer == "http://learncodinganywhere.com/index.html" || document.referrer == "http://learncodinganywhere.com/") {
			    waitThenDoSomething(0, "displayPopup"); //this function waits 0 milliseconds before displaying a popup.
			    //I left the wait function here so that if you change your mind and decide you want to wait before showing 
			    //the modal dialog box, it's as easy as changing the 0 above to a different number, rather than recoding 
			    //all of it again.
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
