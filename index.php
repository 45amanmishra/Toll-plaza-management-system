
<!DOCTYPE HTML>
<html>
	<head>
		<title>Toll Plaza Management System-Home Page</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<link rel="shortcut icon" href="images/fav.png" />	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
		
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
</head>
	<body>
		<!-----start-container----->
		<!-----header-section------>
		<div class="header-section">
			<!----- start-header---->
			<div id="home" class="header">
				<div class="container">
					<div class="top-header">
						<div class="logo">
							<a href="index.php"><img src="images/logo2.png" title="logo" /></a>
						</div>
						<!----start-top-nav---->
						 <nav class="top-nav">
							<ul class="top-nav">
								<li class="active"><a href="index.php">Home </a></li>
								<li ><a href="admin/index.php">Admin</a></li>
								<li><a href="staffs/index.php">Staff</a></li>
								<li><a href="cust/index.php">Customer</a></li>
							</ul>
							
							<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
						</nav>
						<div class="clearfix"> </div>
						
					</div>
				</div>
			</div>
			<!----- //End-header---->
			<!----- start-slider---->
			<!----start-slider-script---->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			
			    <div  id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img style="overflow:hidden; height:100%; width: 100%;" src="images/back.jpg" alt="">
					 
			          <div class="caption text-center">
					  <h1 style="color: black";>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Toll Plaza   <span style="font-weight: bold; font-size: larger;">Management System.</span></h1>
					  <div class="slide-text-info">
			          		
			          		
			          		
			          		
			          	</div>
			          </div>
			        </li>    
			      </ul>
			    </div>
			    <div class="clearfix"> </div>
			    
			<!----- //End-slider---->
			</div>
			
			
			
			
	</body>
</html>

