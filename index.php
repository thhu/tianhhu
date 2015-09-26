<!DOCTYPE html>
<html class="no-skrollr">
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="google-site-verification" content="cd1IrDlV_ctrO7S3j560D9ONhf2ppbK_Jlt71HFfuQM" />
	<title>I'm Tian Hu</title>
	<link rel="stylesheet" href="css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/bootstrapValidator.min.css"/>	
	<link rel="stylesheet" href="css/normalize.css"/>
	<link rel="stylesheet" href="css/main.css"/>
	<link rel="icon" href="img/icon.png?v=2">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<script src="js/vendor/jquery-1.10.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrapValidator.min.js"></script>
	<script src="js/main.js"></script>
</head>

<body>
	<!--
		We position the images fixed and therefore need to place them outside of #skrollr-body.
		We will then use data-anchor-target to display the correct image matching the current section (.gap element).
	-->

	<div
		class="parallax-image-wrapper parallax-image-wrapper-50"
		data-anchor-target="#dragons + .gap"
		data-bottom-top="transform:translate3d(0px, 300%, 0px)"
		data-top-bottom="transform:translate3d(0px, 0%, 0px)">
		<div
			class="background-img-welcome parallax-image parallax-image-50"
			data-anchor-target="#dragons + .gap"
			data-bottom-top="transform: translate3d(0px, -60%, 0px);"
			data-top-bottom="transform: translate3d(0px, 60%, 0px);">
		</div>
		<!--the +/-80% translation can be adjusted to control the speed difference of the image-->
	</div>

	<div
		class="parallax-image-wrapper parallax-image-wrapper-50"
		data-anchor-target="#bacons + .gap"
		data-bottom-top="transform:translate3d(0px, 300%, 0px)"
		data-top-bottom="transform:translate3d(0px, 0%, 0px)">

		<div
			class="background-img-exp parallax-image parallax-image-50"
			data-anchor-target="#bacons + .gap"
			data-bottom-top="transform: translate3d(0px, -60%, 0px);"
			data-top-bottom="transform: translate3d(0px, 60%, 0px);"
		></div>
	</div>

	<div
		class="parallax-image-wrapper parallax-image-wrapper-50"
		data-anchor-target="#kittens + .gap"
		data-bottom-top="transform:translate3d(0px, 300%, 0px)"
		data-top-bottom="transform:translate3d(0px, 0%, 0px)">

		<div
			class="background-img-proj parallax-image parallax-image-50"
			data-anchor-target="#kittens + .gap"
			data-bottom-top="transform: translate3d(0px, -60%, 0px);"
			data-top-bottom="transform: translate3d(0px, 60%, 0px);"
		></div>
	</div>
	 <!-- navbar -->
		<nav class="navbar navbar-default navbar-fixed-top visible-lg-block" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" data-scroll-nav="0">Tian Hu</a>
		    </div>
		
		    <!-- Collect the nav links, forms, and other content for toggling -->
		   
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    	 <div class="navbar-example">
				      <ul class="nav navbar-nav">
				        <li><a href="#about" data-scroll-nav="0">Introduction</a></li>
				        <li><a href="#usage" data-scroll-nav="1">Experience</a></li>
				        <li><a href="#options" data-scroll-nav="2">Projects</a></li>
				        <li><a href="#contact" data-scroll-nav="3">Contact</a></li>

				      </ul>
		    	</div>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
       <!-- end navbar -->
	<div id="skrollr-body" class="container-fluid">
		<div class="header-gap"></div>
		
		

		<div class="row">
			<div class="col-xs-12">
				<!--<h1 class="text-center">Hi There!</h1>
				<p>
					Thank you for taking your time to visit my website!
				</p>
				-->
			</div>
		</div>
		<div class="" id="dragons">
			<div id="about" data-scroll-index="0" class="row visible-lg-block">
				<div class="col-xs-12">
					<!-- content -->
				</div>
			</div>
		</div>
		<div class="gap gap-50 background-img-welcome"></div>
		<div class="content" id="bacons">
			<div class="row">
					<div class="col-xs-12 col-md-10 col-md-offset-2">
						<div class="row">
							<div class="col-xs-12 col-md-6">
								<p>
									<h1>About Me:</h1>
									Hi there, my name is Tian and thank you for taking the time to check out my website!<br/>
									I am currently a third year student pursuing a double degree program for computer science
									at the University of Waterloo and business administration at Wilfred Laurier University.
								</p>
								<p>
									This website was designed to help you get to know me a bit better and to highlight some of the 
									things that I have worked on over the past couple of months.
									If you have any feedback for the site or would like to get in touch, feel free to email me at
									<a href="mailto:hello@tianhhu.com">hello@tianhhu.com</a> or click the contact button below. 
									<br/>
									<br/>
									<div class="visible-lg-block">
										<a class="btn btn-default" href="#contact" data-scroll-nav="3">Contact</a>
									</div>
									<div class="hidden-lg">
										<a class="btn btn-default btn-lg" href="#contact" data-scroll-nav="3">Contact</a>
									</div>
								</p>
							</div>
							<div class="col-xs-6 col-md-5">
								<img class="img-responsive" src="img/uw.png">
								<div class="visible-lg-block">
									<img class="img-responsive" src="img/wlu.png">
								</div>
							</div>
							<div class="col-xs-6 visible-md-block visible-sm-block visible-xs-block">
								<img class="img-responsive" src="img/wlu.png">
							</div>
						</div>						
					</div>
			</div>
			<div id="usage" data-scroll-index="1" class="row">
				<div class="col-xs-12">
					<!-- more content -->
				</div>
			</div>
		</div>
		<div class="gap gap-50 background-img-exp"></div>
		<div class="content" id="kittens">
			<div class="row">&nbsp;</div>
			<div class="row">
				<div class="col-xs-6 col-md-3 col-md-offset-1 col-xs-offset-3">
					<br/>
					<a href="https://dabbleit.com/"><img class="img-responsive" src="img/logoshadow.png"></a>
				</div>
				<div class="col-xs-12 col-md-8">
					<h1 class="no-bottom-margin">Founder - CIO<br/><small>Dabbleit.com</small></h1>
					August 2014 - Present
					<ul>
						<li>Developed a login, registration and account request system for the private beta using PHP and Javascript.</li>
						<li>Consulted on business development and operations of the start up company</li>
						<li>Helped set up web hosting and servers for the web application to run on.</li>
						<li>Helped set up repository and implemented code testing and promotion practices</li>
						<li>Developing new features to improve platform security such as a password reset function, 
							account lockout after numerous failed login attempts, and session timeouts.
						</li>
						<li>Researching ways to dynamically scale the web application and improve performance</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-md-3 col-md-offset-1 col-xs-offset-3">
					<a href="http://power-unit.org/"><img class="img-responsive" src="img/PUYO-Logo.png"></a>
				</div>
				<div class="col-xs-12 col-md-8">
					<h1 class="no-bottom-margin">Web Director <br/><small>Power Unit Youth Organization</small></h1>
					October 2013 - Present
					<ul>
						<li>Development of new responsive websites to help promote Power Unit's online presence using HTML5 and CSS3</li>
						<li>Integration of Facebook’s API and Open Graph Tags into a custom Wordpress template to create more effective way 
							to share news about the site on Facebook
						</li>
						<li>
							Development of simple web checkout application to sell tickets online using a simple HTML5 form as the frontend, 
							PHP, MySQL for the backend and PayPal REST API for payment processing
						</li>
						<li>Development of a booth reservation web application to help streamline the vendor registration process in PHP and MySQL</li>
						<li>Lead a team of 4-5 junior developers through the different web projects</li>
					</ul>
				</div>
			</div>
			<div class="row">&nbsp;</div>
			<div class="row">
				<div class="col-xs-6 col-md-3 col-md-offset-1 col-xs-offset-3">
					<a href="http://hoopp.com/"><img class="img-responsive" src="img/hoopp.jpg"></a>
				</div>
				<div class="col-xs-12 col-md-5">
					<h1 class="no-bottom-margin">Investment Solutions Developer <br/><small>Healthcare of Ontario Pension Plan</small></h1>
					January 2014 - April 2014
					<ul>
						<li>Built T-SQL based web report in Microsoft Business Intelligence.</li>
						<li>Worked closely with business analysits and other developers in a team environment.</li>
						<li>Unit tested older .NET web applications at the controller level within the MVC model.</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-md-3 col-md-offset-1 col-xs-offset-3">
					<a href="http://www.tpsgc-pwgsc.gc.ca/comm/index-eng.html"><img class="img-responsive" src="img/gov_logo.jpg"></a>
				</div>
				<div class="col-xs-12 col-md-5">
					<h1 class="no-bottom-margin">Web Application Developer <br/><small>Public Works and Government Services Canada</small></h1>
					May 2013 - August 2013
					<ul>
						<li>Helped develop a web application in PHP that produced dynamic front-end content leveraging a custom pre-existing objective library.</li>
						<li>Met with clients to explain the progress of the project, define new business requirements for the website and teach them how to use the new site. </li>
						<li>Wrote SQL scripts to create custom views of tables that were requested by the client.</li>
					</ul>
				</div>
			</div>
			<div id="options" data-scroll-index="2" class="row">
			</div>
		</div>
		<div class="gap gap-50 background-img-proj"></div>
		<div class="content" id="done">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<h1>Startups I've Founded <small>small teams, fast pace, agile environment</small></h1>
				</div>
			</div>
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-1">
						<a href="http://minimalagency.com"><img class="img-responsive" src="img/minimal_agency.png"/></a>
						<div class="row">
							
							<div class="col-xs-10 col-xs-offset-1">
								<h2>Web Design Agency</h2>
								<p>
									This is a web design agency that I help start with a few of my friends this year. 
									Our main goal is to make the web a simpler place for users through minimalistic designs.
									Even better, we even have customers! We landed our first contract with the Hart House Investment Club
									during the summer. To find out more, feel free to visit their website at: 
									<a href="http://minimalagency.com">minimalagency.com</a>.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-1">&nbsp;</div>
					<div class="col-xs-10 col-xs-offset-1 col-md-4">
						<a href="https://dabbleit.com"><img class="img-responsive" src="img/logoshadow.png"/></a>
						<div class="row">
							<div class="col-xs-10 col-xs-offset-1">
								<h2>Innovative Startup</h2>
								<p>
									Dabble is a platform for users to discover, annotate and share images across the web.
									It is a startup project that I helped found. The goal of our team is to improve user interaction
									for online photos by bringing more context to images. Dabble is in the
									private beta phase, where we hope to gather more user feedback on our service. 
									To find out more, and to see a demo of our annotated images, please visit: 
									<a href="https://dabbleit.com">dabbleit.com</a>.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1">
						<h1>Websites I've Built <small>html5, css3, javascript</small></h1>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-1">
						<a href="http://paintathon.com"><img class="img-responsive" src="img/pat_logo.png"/></a>
						<div class="row">
							<div class="col-xs-10 col-xs-offset-1">
								<h2>Painting for Charity</h2>
								<p>
									Paint-A-Thon is an annual painting event that is organized by the Power Unit Youth 
									Organization and held in Toronto. Similar to a marathon, participants are allowed 
									to paint for as long as they want throughout the event. The purpose of the event is to raise
									money for a designated charity. 
									As the web director of Power Unit, I took on the challenge of building the new the Paint-A-thon website.
									The goal was to make the website more look more modern, while also moving off of the 
									outdated Joomla content management system. Paint-A-Thon itself is an event 
									To check out the website, please visit: 
									<a href="http://paintathon.com">paintathon.com</a>.								
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-1">&nbsp;</div>
					<div class="col-xs-10 col-xs-offset-1 col-md-4">
						<a href="http://e3challenge.com"><img class="img-responsive" src="img/E3_logo_updated.png"/></a>
						<div class="row">
							<div class="col-xs-10 col-xs-offset-1">
								<h2>Summer Business Challenge</h2>
								<p>
									The E3 Challenge is a summer business challenge modeled after the television series 
									"The Apprentice". Participants between the ages of 16-20 form teams and compete in
									a series of challenges. The goal of the E3 Challenge is to give youths a hands on 
									experience tackling common issues that different organization faces every day. 
									The Power Unit Youth Organization also organizes this challenge.  
									The purpose of redesigning the website was to help increase the credibility of the 
									business challenge and make it easier for users to find the correct information. 
									This was one of the factors that influenced the new one page design. To find out
									more about the challenge and to check out the website, please visit: 
									<a href="http://e3challenge.com">e3challenge.com</a>.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1">
						<h1>Web Applications I've Built <small>php, mysql</small></h1>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-1">
						<img class="img-responsive" src="img/Feel-Good-Deals-Header.jpg"/>
						<div class="row">
							<div class="col-xs-10 col-xs-offset-1">
								<h2>Web Sales Application</h2>
								<p>
									Feel Good Deals is an initiative started by Power Unit Youth Organization's beneficiary
									team. They wanted to create a simple ecommerce platform to sell ticket vouchers. All 
									the proceeds from the website would then be donated to a charity.
									The website was built using an array of different technologies. The visual end of the store
									was created using a custom Wordpress template. Then the customer's information was captured
									through simple web forms. Finally the checkout process was done through PayPal and their REST API. 
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-1">&nbsp;</div>
					<div class="col-xs-10 col-xs-offset-1 col-md-4">
						<img class="img-responsive" src="img/niu_logo.png"/>
						<div class="row">
							<div class="col-xs-10 col-xs-offset-1">
								<h2>Vendor Registration Web Application</h2>
								<p>
									Night It Up! is organized by Power Unit and is one of Toronto's biggest street market festivals.
									To help the Night It Up! sales team streamline the process of booking booths for vendors, I created a vendor 
									registration web application. This web application allowed the vendors to login at a specific time, 
									enter their information, and reserve a booth at the event. It also prevented the vendors from booking the 
									same booth at the same time. This resulted in a process that was a lot faster then previous years. 
								</p>
							</div>
						</div>
					</div>
				</div>
				<div id="contact" data-scroll-index="3" class="row background-grey">
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-5 col-md-offset-1">
						<h1>Say Hello:</h1> 
						<p>
							Feel free to contact me at anytime, by filling out the form or connecting through the various ways
							listed below: <br/>
							<ul>
								<li>Email: <a href="mailto:hello@tianhhu.ca">hello@tianhhu.ca</a></li>
								<li>Phone: (647)-459-8915</li>
								
							</ul>
						</p>
						<div class="visible-lg-block visible-md-block">
						<h1>Credits:</h1>
						<p>
							List of libraries used:
							<ul>
								<li><a href="http://html5boilerplate.com/">HTML5 Boilerplate</a> - Front end template</li>
								<li><a href="http://prinzhorn.github.io/skrollr/">Skrollr</a> - Parallax Scrolling and scrolling animations</li>
								<li><a href="http://getbootstrap.com">Bootstrap</a> - Responsive scaffolding and CSS styles</li>
								<li><a href="http://www.bytemuse.com/scrollIt.js/">Scrollit.js</a> - Smooth one page scrolling library</li>
								<li><a href="https://github.com/PHPMailer/PHPMailer">PHPMailer</a> - Email handling PHP library</li>
								<li><a href="http://bootstrapvalidator.com/">BootstrapValidator</a> - Javascript input validation</li>
								<li><a href="https://github.com/vlucas/valitron">Valitron</a> - PHP input validation library</li>
							</ul>
						</p>
						</div>
					</div>
					<div class="col-xs-12 col-md-5 text-left">
						<br/>	
						<br/>
						<?php
							if(isset($_GET['success'])){
								echo '<div class="alert alert-success">
										<strong>Thank you!</strong> Your message has been received. 
									  </div>';
							}
							if(isset($_GET['fatal_email_error'])){
								echo '<div class="alert alert-danger">
										<strong>Oh No! Something went wrong.</strong> 
										Your message was not sent, please try again or use an alternative method to contact me.
									  </div>';
							}
						?>
						<form id="email_form" class="form-horizontal email_form" role="form" action="email.php" method="post">
						  <div class="form-group <?php if(isset($_GET['error']) && isset($_GET['name'])){echo "has-error";}?>">
						    <label for="name" class="col-sm-2 control-label">Name</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="name" name="name" placeholder="Name">
						      <?php
						      		if(isset($_GET['error']) && isset($_GET['name'])){
						      			echo '<div class="color-red"><small>Your name is required and cannot be empty.</small></div>';
						      		}
						       ?>
						    </div>
						  </div>
						  <div class="form-group <?php if(isset($_GET['error']) && isset($_GET['email'])){echo "has-error";}?>">
						    <label for="email" class="col-sm-2 control-label">Email</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
						      <?php
						      		if(isset($_GET['error']) && isset($_GET['email']) && $_GET['email'] == 1){
						      			echo '<div class="color-red"><small>Your email is required and cannot be empty.</small></div>';
						      		}
									else if(isset($_GET['error']) && isset($_GET['email']) && $_GET['email'] == 2){
										echo '<div class="color-red"><small>Your input is not a valid email address.</small></div>';
									}
						       ?>						     
						    </div>
						  </div>
						  <div class="form-group <?php if(isset($_GET['error']) && isset($_GET['content'])){echo "has-error";}?>">
						    <label for="content" class="col-sm-2 control-label">Message</label>
						    <div class="col-sm-10">
						      <textarea class="form-control" id="content" name="content" rows="7" placeholder="Content"></textarea>
						      <?php 
						      if(isset($_GET['error']) && isset($_GET['content'])){
						      			echo '<div class="color-red"><div class="color-red"><small>The content of the message cannot be empty.</small></div>';
						      }
						      ?>
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						    	<div class="visible-lg-block">
						      		<button type="submit" class="btn btn-default">Send Message</button>
						      	</div>
						      	<div class="hidden-lg">
						      		<button type="submit" class="btn btn-default btn-lg">Send Message</button>
						      	</div>
						    </div>
						  </div>
						</form>
					</div>
					<div class="visible-sm-block visible-xs-block">
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-5 col-md-offset-1">
						<h1>Credits:</h1>
						<p>
							List of libraries used to create this website:
							<ul>
								<li><a href="http://html5boilerplate.com/">HTML5 Boilerplate</a> - Front end template</li>
								<li><a href="http://prinzhorn.github.io/skrollr/">Skrollr</a> - Parallax Scrolling and scrolling animations</li>
								<li><a href="http://getbootstrap.com">Bootstrap</a> - Responsive scaffolding and CSS styles</li>
								<li><a href="http://www.bytemuse.com/scrollIt.js/">Scrollit.js</a> - Smooth one page scrolling library</li>
								<li><a href="https://github.com/PHPMailer/PHPMailer">PHPMailer</a> - Email handling PHP library</li>
								<li><a href="http://bootstrapvalidator.com/">BootstrapValidator</a> - Javascript input validation based on Bootstrap and jQuery</li>
								<li><a href="https://github.com/vlucas/valitron">Valitron</a> - PHP input validation library</li>
							</ul>
						</p>
					</div>
					</div>
				</div>

				
		</div>
	</div>
	<!-- Google Analytics -->
        <script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			
			ga('create', 'UA-54926049-1', 'auto');
			ga('send', 'pageview');
		</script>
	<!-- end Google Analytics -->
</body>

</html>
