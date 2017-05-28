<!DOCTYPE HTML>
	<head>
		<meta charset="utf-8">

		<title><?php wp_title('|', 1, 'right'); ?> <?php bloginfo('name'); ?></title>

		<!-- Responsive Metatag -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


	    <!-- css -->
	    	<!--[if IE 7]>
    			<link rel="stylesheet" href="/css/fontello-ie7.css" >
	 		<![endif]-->

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
			<!--[if lt IE 9]>
				<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->

		<!-- Media queries -->
			<!--[if lt IE 9]>
				<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
			<![endif]-->
			 <?php wp_head(); ?>
               <!-- Facebook pixel  -->
              <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '1699855016895475'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=1699855016895475&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
	</head>
	<body>
    	<!-- Header -->
   		<header>
			<nav class="navbar navbar-fixed-top" role="navigation">
				<div class="container" id="navCont">

					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/"><img src="<?php bloginfo('template_url')?>/img/logo.png" alt="doggedly devoted logo" /></a>
					</div>

					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav">
							<li>
								<a href="/">Home</a>
							</li>
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">About<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li>
										<a href="/about/philosophy">Philosophy</a>
									</li>
									<li>
										<a href="/about/team">The Team</a>
									</li>
									<li>
      								              <a href="/testimonials">Testimonials</a></li>
									<li>
										<a href="/about/employment">Employment</a>
									</li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li>
										<a href="/services/training">Training</a>
									</li>
									<li>
                                                                                <a href="/services/dog-walks">Dog Walking</a>
                                                                        </li>

								</ul>
							</li>

							<li>
								<a href="/blog">Blog</a>
							</li>
						</ul>

						<div class="navbar-right navbar-contact">
							<a id="contactus" class="btn btn-default"  role="button">Contact Us</a>
							</form>
						</div><!--/.nav-collapse -->
					</div>
			</nav>
	</header>
	<!-- end Header -->
</body>
