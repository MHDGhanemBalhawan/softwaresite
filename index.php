<!DOCTYPE html>
<?php 
	SESSION_START();
	include 'functions/functions.php'; 
	include_once 'includes/security.php';
	include_once 'includes/emailconfig.php';
	$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
	$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
	
	global $conn;
						
	$ip = getIp();



	if(isset($_POST['submit_comment'])){
	// escape variables for security
		$name = strip_tags(mysqli_real_escape_string($conn, $_POST['name']));
		$email = strip_tags(mysqli_real_escape_string($conn, $_POST['email']));
		$subject = strip_tags(mysqli_real_escape_string($conn, $_POST['subject']));
		$comment = strip_tags(mysqli_real_escape_string($conn, $_POST['comment']));
		$date = date('Y-m-d h:i:s');
		$ins_sql = "INSERT INTO tbl_comment (com_name, com_email, com_subject, com_comment, com_date, com_ip) VALUES ('$name', '$email', '$subject', '$comment', '$date', '$ip')";
		$pre_sql = mysqli_query($conn, $ins_sql);
	}




?>


<html>
    <head>
	<title>Modelled Soft</title>
    <meta charset="utf-8">
    
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Modelled Soft, Media, Websites, software,  and databases designs in London, UK.">
  <meta name="keywords" content="web,design,development,company,local,internet,www,world,wide,cyber,online,website,motion,flash,html,javascript,site,webpage,homepage,mysql,sql,microsoft,site,graphic,webmaster,layout,Website,WebDesign,website development,web development,Website Designers,InternetSolutions,site,interactive,top,IT,internetmarketing,advertising,DatabaseIntegration,MySQL,,Database,Flash,HTML,Motion Design, JavaScript,Multimedia,website promotion,web promotion,website marketing,web marketing,web hosting,efficient results,internet business,small business,qualitydesign,e-commerce,e-commerce company,search engine submission,search engine ranking,graphic design,industry leader,site maintenance,cheap,reasonable,inexpensive,affordable,web page makers, web consulting,scan,online,images,rebuild,redesign,professional,web design,web designs,databasesdesigns,London,UK,web design London,database design London UK,html UK, web designs, web design uk, advertising, computer, databasesdesignUK,access design UK,php UK,php,mysql,Modelled Soft,Modelled, Soft,Model Soft,London,UK,Mhd. Ghanem Balhawan,Ghanem,ghanem balhawan design.">
  <meta name="author" content="Modelled Soft">
 	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style/style.css" media="all" />
<script type="text/javascript" src="js/script.js" ></script>


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
	  <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
	  <img class="logo" src="images/logo.png" />
      <a class="navbar-brand" href="#">Modelled Soft</a>
    </div>
    <div>
      <div class="collapse navbar-collapse pull-right" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#recent-projects">Recent Projects</a></li>
          <li><a href="#contact">Contact Us</a></li>
         </ul>
      </div>
    </div>
  </div>
</nav>    

<!--end of nav -->
<!-- modal policy -->
<!-- modal policy -->
<div class="container">
  <!-- Modal -->
<div class="modal fade" id="myPolicy" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Privacy policy</h4>
        </div>
        <div class="modal-body">
			<p>By using this website, you agree to the terms of this privacy policy.</p>

			<p>Personal information collected.</p>
			<p>When sending an email you may be asked to personal information such as your name, email telephone number. Also, your demographic information such as IP address  would be register with your email.</p>

			<p>What is the information used for?</p>
			<p>The informaiton collected may be used in one of the following ways:</p>
			<ul id="myPolicy">
				<li>Internal record keeping. </li>
				<li>I may use the information to improve my products and services.</li>
				<li>I may periodically send promotional emails about new products, special offers or other information which we think you may find interesting using the email address which you have provided.</li>
				<li>From time to time, we may also use your information to contact you for market research purposes.</li>
				<li>I may contact you by email, phone, fax or mail.</li>
				<li>I may use the information to customise the website according to your interests.</li>
				<li>I use the information to prevent spam in my inbox.</li>
			</ul>
			<p>I will keep all records of users carefully and treat them as stricly confidential.
			Personal information (email addresses, names, IP addresses) will not be shared with tird parties. If you wated not to recieve further email, you could opt-out by sending me an email, a text message.</p>

        </div><!-- modal-body -->
	<div class="modal-footer">
	  <button type="button" class="button" data-dismiss="modal">Close</button>
	</div>
    </div>
	</div>
</div>
</div>

<div class="policy" id="policy">
	
	<div>Cookie policy notice. This site uses cookies so you can enjoy the best browsing experience. By continuing to using this site you agree to our <a href="#myPolicy" data-toggle="modal" data-target="#myPolicy" class="">Cookies Policy.</a>
	<a href="#" id="close" class="button">Close</a>
	</div>
	
</div><!-- container -->



<!-- end of policy -->

<section id="intro">
	
	<div class="intro">
	
		<div class="container">
			
			<div class="intro-headings">
				<h1>Modelled Soft</h1>
				<h4>Professional Designs</h4>
			</div><!-- end of heading -->
		</div><!--end container -->
		<a href="#about" class="continue-btn">Continue</a>
	</div> <!-- end of intro -->
</section><!-- intro -->
<section id="about">
<div class="about">
	<div class="container-sm">
		<h2>About</h2>
		<p>Are you dealing with issues like these<i class="fa fa-question-circle" aria-hidden="true"></i><br>
		You want ot get more information, customers and offer from worldwide<i class="fa fa-exclamation-circle" aria-hidden="true"></i><br>
		Your organization is dealing with many distributors customers and products and you want to keep your customer informed about your new products<i class="fa fa-exclamation-circle" aria-hidden="true"></i><br>
		You want to sell your products online and keep your business open for twenty four hours a day<i class="fa fa-exclamation-circle" aria-hidden="true"></i><br>
		You want to store your business transaction in a database to get Your information in one click<i class="fa fa-exclamation-circle" aria-hidden="true"></i><br>
		You want to get the best software available<i class="fa fa-exclamation-circle" aria-hidden="true"></i><br>
		You want to reduce your communication expenses<i class="fa fa-exclamation-circle" aria-hidden="true"></i><br>
		<p>We are trying to incooprate with you and help you in acheiving your goals. We do our best to deliver the best services to our customers and we hope that you’ll join us and be our customer.<br>
		Our services inculde:<br>
		<i class="fa fa-dot-circle-o" aria-hidden="true"></i>Providing you with a Website for you company or shop, which helps you to communicate with millions of people worldwide. A Website can give a lot of information about your company and business for your suppliers as well as your customers. You can save a lot of money and time by using e-mails and the Internet to give your company's information to people instead of other expensive ways.<br>

		<i class="fa fa-dot-circle-o" aria-hidden="true"></i>A software program could help you in:<br>
		Showing your periods income. Helps you to make and audit  your journal entries.
		Calculates cash, credit card and wire transfers income.	Helps you to know your suppliers' accounts.<br>
		What makes our customers happy makes us happy.<br>
		Modelled Soft is founded by M Ghanem Balhawan in 2017.
		<br>
		</p>
	</div> <!-- end of container sm -->
</div> <!-- end about -->
</section><!-- about -->
<div class="clear-fix"></div>
<section id="services">
	<div class="services">
		<div class="container-sm">
			<h2>Services</h2>
		</div>
		<div class="services-list-bg">
			<ul class="services-list container">
				<li class="service media"><h5>Graphic Designs</h5>
					<p>Photoshop & Macromedia Flash.</p>
					<span class="service-divier"></span>
				</li>
				<li class="service web"><h5>Web Design</h5>
					<p>Reponsive web designs with the latest technology.</p>
					<span class="service-divier"></span>
				</li>
				<li class="service databases"><h5>Database Design</h5> 
					<p>Databases Designs using MySQL, SQL Server and MS Access</p>
					<span class="service-divier"></span>
				</li>
			</ul><!-- services-list container -->
		</div><!-- end list bg -->
		
	</div><!-- end services-->
</section><!-- services -->
<div class="clear-fix"></div>
<section id="recent-projects">
	<div class="recent-projects">
		<div class="container-sm">
			<h2>Recent Projects</h2>
		</div><!-- end container-sm -->
			<div class="recent-projects-list-bg">
				<ul class="recent-projects-list container">
					<li class="project-ecommerce">
						<div class="project-visible-content">
							<div class="container-sm">
								<h3>eCommerce Website</h3>
								<div class="project-text-warpper">
									<blockquote>
										<p>eCommerce Website with Admin Panel: This project could be connected to PayPal in order to receive payments from customers and could be tailored to sell digital items. Customers could use the search box for a specific items. Also, customers could see items by selecting the products page, a brand name or a category from the left menu. Admin panel contains adding, editing and deleting: items, categories, brands. Furthermore, the left menu is dynamic when a new category is added it would be reflected in the menu.
										</p>
									</blockquote>
	
								</div><!-- project-text-warpper -->
								<a href="#" class="button project-extra-toggle" onclick="toggleVisibilityCommerce(); return false;">More</a>
								<a href="http://ecommercelogin.mhdghanembalhawan.com/" class="button visit" target="_blank">Visit</a>								
								
							</div><!-- container-sm -->
						</div><!-- project-visible-content -->
						<div class="project-extra" id="project-extra" style="display:none;">
							<ul class="project-extra-images clear-fix">

							<!-- modal -->
								<div>
								  <a class="example-image-link" href="images/ecomnew_pro.png" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><li><img src="images/ecomnew_pro.png"></li></a>
								  <a class="example-image-link" href="images/ecomupdate_pro.png" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><li><img src="images/ecomupdate_pro.png"></li></a>
								  <a class="example-image-link" href="images/ecomview_cart.png" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><li><img src="images/ecomview_cart.png"></li></a>
								  <a class="example-image-link" href="images/ecomview_pro.png" data-lightbox="example-set" data-title="Click anywhere outside the image to close."><li><img src="images/ecomview_pro.png"></li></a>
								  <a class="example-image-link" href="images/ecomview_cust.png" data-lightbox="example-set" data-title="Click anywhere outside the image to close."><li><img src="images/ecomview_cust.png"></li></a>
								  <a class="example-image-link" href="images/ecomview_brand.png" data-lightbox="example-set" data-title="Click anywhere outside the image to close."><li><img src="images/ecomview_brand.png"></li></a>
								</div>
							<!-- end modal -->			
							</ul>
							<ul class="project-extra-info clear-fix">
								<li>
									<img src="images/Window-New-128.png">
									<p class="label">Custom Development:</p><br><p class="label-desc">Define what you need.</p>
								</li>
								<li>
									<img src="images/Window-New-01-128.png">
									<p class="label">Custom Design:</p><br><p class="label-desc">To match your content.</p>
								</li>
								<li>
									<img src="images/Lock-Information-128.png">
									<p class="label">Websites Security:</p><br><p class="label-desc">Protect your information.</p>
								</li>					
							</ul><!-- project-extra-info -->	
						</div><!-- project-extra -->
					</li><!-- end project ecommerce-->
					<li class="project-content-management">
						<div class="project-visible-content">
							<div class="container-sm">
								<h3>Content Management System</h3>
								<div class="project-text-warpper">
									<blockquote>
										<p>Content Management System with Admin Panel: Responsive design made with PHP & MySQL, HTML5, CSS3, Javascript with a dynamic menu for categories to show new added categories and to show the selected pages and the sidebar shows the selected pages, too. New users who register are given subscribers accounts by default when they register and only admins can see the pages for editing and adding posts.
										</p>
									</blockquote>
								</div><!-- project-text-warpper -->
							<a href="#" class="button project-extra-toggle" onclick="toggleVisibilityCMS(); return false;">More</a>
							<a href="http://ecommercesite.comeze.com/" class="visit button" target="_blank">Visit</a>
							</div><!-- container-sm -->
						</div><!-- project-visible-content -->
						<div class="project-extra" id="project-extra" style="display:none;">
							<ul class="project-extra-images clear-fix">	
							<!-- modal -->
								<div>
								  <a class="example-image-link" href="images/cmsadmin_main.png" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><li><img src="images/cmsadmin_main.png"></li></a>
								  <a class="example-image-link" href="images/cmscats.png" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><li><img src="images/cmscats.png"></li></a>
								  <a class="example-image-link" href="images/cmscomments.png" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><li><img src="images/cmscomments.png"></li></a>
								  <a class="example-image-link" href="images/cmsnew_post.png" data-lightbox="example-set" data-title="Click anywhere outside the image to close."><li><img src="images/cmsnew_post.png"></li></a>
								  <a class="example-image-link" href="images/cmsposts.png" data-lightbox="example-set" data-title="Click anywhere outside the image to close."><li><img src="images/cmsposts.png"></li></a>
								  <a class="example-image-link" href="images/cmsprofile.png" data-lightbox="example-set" data-title="Click anywhere outside the image to close."><li><img src="images/cmsprofile.png"></li></a>
								</div>
							<!-- end modal -->	
							</ul><!-- project-extra-images -->
							<ul class="project-extra-info clear-fix">
								<li>
								<div class="Clearfix">
									<img src="images/Window-New-128.png">
									<p class="label">Custom Development:</p><br><p class="label-desc">To match your needs.</p>
								</div>
								</li>
								<li>
									<img src="images/Window-New-01-128.png">
									<p class="label">Custom Interfaces:</p><br><p class="label-desc">To match your content.</p>
								</li>
								<li>
									<img src="images/Lock-Information-128.png">
									<p class="label">Websites Security:</p><br><p class="label-desc">To protect your information.</p>
								</li>		
							</ul><!-- project-extra-info -->
						</div><!-- project-extra -->		
					</li><!--end project 2-->
					<li class="project-wordpress">
						<div class="project-visible-content">
							<div class="container-sm">
								<h3>WordPress Website</h3>
								<div class="project-text-warpper">
									<blockquote>
										<p>WordPress Development: Beautiful website was made with on of the best WordPress theme.
										</p>
									</blockquote>
								</div><!-- project-text-warpper -->
							<a href="#" class="button project-extra-toggle" onclick="toggleVisibilityWordPress(); return false;">More</a>
							<a href="http://coffeeshop.mhdghanembalhawan.com/" class="button visit" target="_blank">Visit</a>	
							</div><!-- container-sm -->
						</div><!-- project-visible-content -->
						<div class="project-extra" id="project-extra" style="display:none;">
							<ul class="project-extra-images clear-fix">
							<!-- modal -->
								<div>
									<a class="example-image-link" href="images/coffeehome.png" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><li><img src="images/coffeehome.png"></li></a>
								  <a class="example-image-link" href="images/coffeesales.png" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><li><img src="images/coffeesales.png"></li></a>
								  <a class="example-image-link" href="images/coffeeteam.png" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><li><img src="images/coffeeteam.png"></li></a>
								  <a class="example-image-link" href="images/coffeeabout.png" data-lightbox="example-set" data-title="Click anywhere outside the image to close."><li><img src="images/coffeeabout.png"></li></a>
								  <a class="example-image-link" href="images/coffeeblog.png" data-lightbox="example-set" data-title="Click anywhere outside the image to close."><li><img src="images/coffeeblog.png"></li></a>
								  <a class="example-image-link" href="images/contact.png" data-lightbox="example-set" data-title="Click anywhere outside the image to close."><li><img src="images/contact.png"></li></a>
								</div>
							<!-- end modal -->
							</ul><!-- project-extra-images -->
							<ul class="project-extra-info clear-fix">
								<li>
									<img src="images/Window-New-128.png">
									<p class="label">Custom Development:</p><br><p class="label-desc">Define what you need.</p>
								</li>
								<li>
									<img src="images/Window-New-01-128.png">
									<p class="label">Customized Themes:</p><br><p class="label-desc">For your websites.</p>
								</li>
								<li>
									<img src="images/Lock-Information-128.png">
									<p class="label">Websites Security:</p><br><p class="label-desc">Keep your customers safe.</p>
								</li>

							</ul><!-- project-extra-info -->

											
						</div><!-- project-extra -->
													
					</li><!-- end project 3-->
				</ul><!-- recent-projects-list container -->
			</div><!-- recent-projects-list-bg -->
	</div><!-- end recent-projects -->
</section><!-- recent projects -->
<section id="contact">		
	<div class="contact">
		<div class="containter-sm">
			<h2>Contact Us</h2>
		</div><!-- container-sm -->
		<?php if(!empty($errors)): ?>
			<div class="form-group">
				<label for="name" class="col-sm-3 control-label"></label>
				<div class="col-sm-7 alert alert-danger" align="left"><ul><li><?php echo implode('</li><li>', $errors); ?></li></ul>
				</div>
			</div><!--form-group-->
			<?php endif; ?>
			<?php if(!empty($success)): ?>
			<div class="form-group">
				<label for="name" class="col-sm-3 control-label"></label>
				<div class="col-sm-7 alert alert-success" align="left" style="padding:10px 10px;margin:5px 0px;"><?php echo $success; ?>
				</div>
			</div><!--form-group-->	
				<?php endif; ?>

	<div class="contact-bg">
		<div class="container">
			<ul class="contact-list">
				<li>
					<i class="fa fa-map-marker"></i>
					<h6>Address</h6>
					<p>SE78AY, Charlton, London, UK</p>
				</li>
				<li>
					<i class="fa fa-envelope-o"></i>
					<h6>Email</h6>
					<p>info@modelledsoft.com</p>
				</li>
				<li>
					<i class="fa fa-mobile"></i>
					<h6>Mobile</h6>
					<p><img src="images/tel.png"></p>
				</li>
			</ul>

		<div class="row">
			<div class="col-lg-12">
			<h2>Contact Us</h2>
			</div><!-- col-lg-12 -->
		</div>
		<div class="row col-lg-12 col-sm-12" style="padding:10px 0px;margin:5px 0px;">
			<form class="form-horizontal" action="index.php?#contact" method="post" role="form" autocomplete="off">
			<!-- error-->
			
			
			
			<div class="form-group">
				<label for="name" class="col-sm-3 control-label">Name *</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" name="name" placeholder="Name" id="name" required/>
				</div>
			</div><!--form-group-->
			<div class="form-group">
				<label for="email" class="col-sm-3 control-label">Email Address *</label>
				<div class="col-sm-7">
					<input type="email" class="form-control" name="email" placeholder="Email" id="email" required/>
				</div>
			</div><!--form-group-->
			<div class="form-group">
				<label for="subject" class="col-sm-3 control-label">Subject *</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" name="subject" placeholder="Subject" id="subject" required/>
				</div>
			</div><!--form-group-->
			<div class="form-group">
				<label for="comment" class="col-sm-3 control-label">Message *</label>
				<div class="col-sm-7">
					<textarea class="form-control" rows="10" name="comment" placeholder="Message" style="resize:none; required/"></textarea>
				</div>
			</div><!--form-group-->
			<div class="form-group"><!-- Submit button !-->
				<label class="col-sm-3 control-label"></label>
				<div class="col-sm-7">
					<input type="submit" value="Send" class="button" name="submit_comment" id="submit_comment">
				</div>

			</div><!--form-group-->
		</div><!--row row col-lg-12 col-sm-12-->	
			</form>	

		<div style="margin:5px;width:5px;height:5px;"></div>
			
		<div class="col-lg-12 col-sm-12 map">
			<iframe width="100%" height="70%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=London%20SE78AY%2C%20United%20Kingdom&key=AIzaSyBcCkNop_qbwRNaVhkHj8EaGZKz90OLy80" allowfullscreen>
			</iframe>
		</div>

		</div><!-- container -->
<a href="#about" class="scrollToTop">Top</a>
					
	</div><!-- contact-bg -->
			
	</div><!-- contact -->
		
		

</section><!-- contact -->		
<footer>
	<ul class="social-btn-list clear-fix">
		<li><a href="https://twitter.com/modelledsoft" class="twitter" target="_blank">
				<i class="fa fa-twitter"></i>
			</a>
		</li>
		<li><a href="https://aboutme.google.com/b/108223992877131638024/" class="google-plus" target="_blank">
				<i class="fa fa-google-plus"></i>
			</a>
		</li>
		<li><a href="https://www.facebook.com/modelledsoft/" class="facebook" target="_blank">
				<i class="fa fa-facebook"></i>
			</a>
		</li>
		
	</ul><!-- social-btn-list -->
	<p>&copy Modelled Soft. All rights reserved.</p>
</footer>	

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        
    </body>
</html>