<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sambo Visal-Designer</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/agency.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/animate.min.css" type="text/css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
<!-- Plugin CSS -->


<link rel="stylesheet" href="css/animate.min.css" type="text/css">
<link href="css/layout.min.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/abril-fatface:n4:default;abel:n4:default.js" type="text/javascript"></script>
</head>

<body style="padding-top: 00px">
<nav class="navbar navbar-default navbar-fixed-top"  style="padding-bottom: 12px; padding-top: 12px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span> Menu <span class="glyphicon glyphicon-arrow-down"></span></button>
      <a class="navbar-brand" href="#">Designer |</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="topFixedNavbar1">
      <ul class="nav navbar-nav">
        <li ><a href="index.html" class="nav-links">Home<span class="sr-only">(current)</span></a></li>
        <li ><a href="about.html" class="nav-links">About</a></li>
     	<li><a href="service.html" class="nav-links">Services</a></li>
        <li class="active"><a href="contact.html" class="nav-links">Contact</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle nav-links" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Memories<span class="caret" style="color: white"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">High School</a></li>
            <li><a href="#">University</a></li>
            <li><a href="#">Photos</a></li>           
           
          </ul>
        </li>
        <li class="dropdown"><a href="#" class="dropdown-toggle nav-links" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Activities<span class="caret" style="color: white"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Internship</a></li>
            <li><a href="#">Holiday</a></li>
            <li><a href="#">Family</a></li>
          </ul>
        </li>
      </ul>
</div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate action="<?= $_SERVER['PHP_SELF']; ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea type="text" class="form-control"  placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>




<div id="findus">
  <div class="container-sm content-lg">
    <div class="row wow fadeInLeft">
			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<a href="#"><i class="fa fa-twitter"></i></a>
					</div>
					<h4>Twitter</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<a href="#"><i class="fa fa-facebook"></i></a>
					</div>
					<h4>Facebook</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<a href="#"><i class="fa fa-google"></i></a>
					</div>
					<h4 style="color: white">Google</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<a href="#"><i class="fa fa-wordpress"></i></a>
					</div>
					<h4>Blog</h4>
				</div>
			</div>
		</div>
  </div>

</div>


<nav id="tf-footer">
        <div class="container">
             <div class="pull-left">
               <p>2017 © &nbsp;All Rights Reserved. Cambodia Kingdom Of Wonder</p>
             </div>
            <div class="pull-right"> 
                <ul class="social-media list-inline">
                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                    <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                    <li><a href="#"><span class="fa fa-behance"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>
  <script src="js/contact_me.js"></script>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
