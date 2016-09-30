
 <?php 
 if(isset($_POST['submit'])){
     $to = "contact@labyrinthdigital.io"; // this is your Email address
     $from = $_POST['email']; // this is the sender's Email address
     $first_name = $_POST['fName'];
     $last_name = $_POST['lName'];
     $tel = $_POST['tel'];
     $email = $_POST['email'];
     $subject = "Form submission";
     $message = $first_name . " " . $last_name . " , \n Phone: " . $tel . ", \n Email: " . $email . " \n wrote the following:" . "\n\n" . $_POST['comments'];
 
     $headers = "From:" . $from;
     mail($to,$subject,$message,$headers);
     echo header('Location: thanks.html');
     // You can also use header('Location: thank_you.php'); to redirect to another page.
     // You cannot use header and echo together. It's one or the other.
     }
 ?>

<!DOCTYPE HTML>
<html>
<head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/style.css" />
      <link href='https://fonts.googleapis.com/css?family=Cinzel+Decorative:400,900,700|Open+Sans:400,300,300italic,400italic,700' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="css/font-awesome.min.css" />
		<title>Contact | Labyrinth</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
      
      
      <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
      <link rel="manifest" href="/manifest.json">
      <meta name="msapplication-TileColor" content="#000000">
      <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
      <meta name="theme-color" content="#000000">
      
      
      
      
      <meta name="author" content="Labyrinth">
      <meta name="description" content="We look forward to hearing from you">
      <meta property="og:description" content="We look forward to hearing from you">
      <meta property="og:title" content="Contact | Labyrinth">
      <meta name="twitter:description" content="We look forward to hearing from you">
      <meta name="twitter:title" content="Contact | Labyrinth">
      <meta property="og:url" content="http://URLHERE">
      <meta property="og:image" content="img/business.png">
      <meta property="og:site_name" content="Labyrinth">
      
      
    </head>
<body>


 
<div class="overflow">
<!--<a href="estimate.html" class="white-text" style="font-weight: 300 !important;">
	 	<div class="estilink center-align">
	 		<h3 class="black white-text flow-text">Estimate Your Website's Price <a href="estimate.html" class="waves-effect waves-light btn-floating blue darken-3"><i class="fa fa-tag" aria-hidden="true"></i></a></h3>
	 	</div>
		</a>-->
  <div class="navbar-fixed">
	<nav>
	    <div class="nav-wrapper black">
	     <div class="container">
	      <a href="index.html" class="brand-logo center"><img src="img/logo2.png" class="logo" alt="Labyrinth" /></a>
	      <a href="tel:910-233-3009" class="right phone"><i class="material-icons white-text">phone</i></a>
	      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons white-text">menu</i></a>
	      <ul class="left hide-on-med-and-down list">
	        <li><a href="services/services.html">Services</a></li>
	        <li><a href="portfolio.html">Portfolio</a></li>
	        </ul>
	        <ul class="right hide-on-med-and-down list">
	        <li><a href="about.html">About</a></li>
	        <li ><a class="active" href="contact.php">Contact Us</a></li>
	        </ul>
	      </ul>
	      </div>
	      <ul class="side-nav black" id="mobile-demo">
	      	<li class="white-text right-align"><span class="close">&times;</span></li>
	        <li><a class="white-text" href="services/services.html">Services</a></li>
	        <div class="underline ul2"></div>
	        <li><a class="white-text" href="portfolio.html">Portfolio</a></li>
	        <div class="underline ul2"></div>
	        <li><a  class="white-text"href="about.html">About</a></li>
	        <div class="underline ul2"></div>
	        <li><a class="white-text" href="blog.html">Blog</a></li>
	        <div class="underline ul2"></div>
	        <li><a class="white-text active" href="contact.php">Contact Us</a></li>
	      </ul>
	    </div>
	  </nav>
	  </div>
	  <header class="header-wrap conhead">
	  	<div class="header conheader">
	  		<h2 class="center-align black-text">Contact Us</h2>
	  	</div>
	  </header>
	  
	  <main>
	  <?php echo $result; ?>
	  <div class="container" style="margin-top: 170px; padding-bottom: 4em;">
	  	<div class="row">
	  	 <h3 class="center-align">Give Us A Shout</h3>
	  		<div class="col l6 m6 s12">
	  			<p class="flow-text">
	  				We look forward to hearing from you!<br />
	  				</p>
	  				<p class="flow-text">For urgent matters, please give us a call or send an email.  For questions regarding our services please fill out the form provided.  We will be sure to contact you within 24 hours.
	  				</p>
	  			<a href="tel:910-233-3009" class="con"><span>Phone:</span> 910-233-3009</a>
	  			<br />
	  			<a href="tel:917-863-0195" class="con"><span>Phone:</span> 917-863-0195</a>
	  			<br />
	  			<a href="mailto:contact@labyrinthdigital.io" class="con">contact@labyrinthdigital.io</a>
	  		</div>
	  		<div class="col l6 m6 s12">
	  			<form name="form" method="post" action="contact.php" role="form">
	  			  <div class="input-field">
	  				<input type="text" name="fName" value="" class="validate" required/>
	  				<label for="fName">First Name</label>
	  			  </div>
	  			  <div class="input-field">
	  			  	<input type="text" name="lName" value="" class="validate"/>
	  			  	<label for="lName">Last Name</label>
	  			    </div>
	  			    <div class="input-field">
	  			    	<input type="email" name="email" value="" class="validate" required/>
	  			    	<label for="email">Email</label>
	  			      </div>
	  			    <div class="input-field">
	  			    	<input type="tel" name="tel" value="" class="validate" required/>
	  			    	<label for="tel">Phone Number</label>
	  			      </div>
	  			    <div class="input-field">
	  			    	  			      	<textarea name="comments" id="comments" class="materialize-textarea" required></textarea>
	  			    	  			      	<label for="comments">Questions/Comments</label>
	  			    	  			        </div>
	  			     <button class="btn waves-effect waves-light blue darken-2 sub" type="submit" name="submit">Submit
	  			     		     <i class="material-icons right">send</i>
	  			     		   </button>
	  			</form>
	  			
	  		</div>
	  		
	 	</div>
	  </div> 
	  <div class="mapdiv" style="margin-bottom: -10px ;">
	  				<div class="mapwrap"><h3 class="maptext center">Located in NC? <br /> We'll come to you!</h3></div>
	  				<div class="map">
	  					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6682638.146321085!2d-84.38495878313623!3d35.131501168391246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88541fc4fc381a81%3A0xad3f30f5e922ae19!2sNorth+Carolina!5e0!3m2!1sen!2sus!4v1466973373939" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
	  				</div>
	  			</div>
	   <div class="black white-text center-align bottom">
	    	 <p class="flow-text">Want to learn more?</p>
	    	 <a href="services/services.html" class="btn waves-effect waves-light blue darken-3">View Services</a>
	   	 </div>
	   </main>
	 <footer>
	 	   <div class="container">
	 		  	<div class="row">
	 		  		<img src="img/logo.png" alt="Logo" class="footlogo"/>
	 		  		<br />
	 			  	  <div class="col s8 offset-s2">
	 			  		<a href="https://www.facebook.com/labyrinthdigital/"><i class="fa fa-facebook-square white-text fa-3x" aria-hidden="true"></i></a>
	 			  		<a href="https://www.instagram.com/labyrinthdigital/"><i class="fa fa-instagram white-text fa-3x" aria-hidden="true"></i></a>
	 			  		<a href="https://twitter.com/Labyrinth_io"><i class="fa fa-twitter-square white-text fa-3x" aria-hidden="true"></i></a>
	 			  		<a href="https://www.linkedin.com/company/labyrinth-digital"><i class="fa fa-linkedin-square white-text fa-3x" aria-hidden="true"></i></a>
	 			  	  </div>
	 			  	  <div class="col s8 offset-s2">
	 			  	   <ul class="footnav">
	 			  	     <li><a href="services/services.html">Services</a></li>
	 			  	     <li><a href="portfolio.html">Portfolio</a></li>
	 			  	     <li><a href="about.html">About</a></li>
	 			  	     <li><a href="blog.html">Blog</a></li>
	 			  	     <li><a href="contact.php">Contact Us</a></li>
	 			  	   </ul>
	 			  	   </div>
	 		  	</div>
	 	   </div>
	 	   
	 	  </footer>
	 	 <div class="black white-text center foot">
	 	 		&copy; Labyrinth Digital 2016
	 	 </div>
	 	  
	 	</div>  
	 	  
	 	  <!--Import jQuery before materialize.js-->
	 	        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	 	        <script type="text/javascript" src="js/materialize.min.js"></script>
	 	        <script src="js/script.js" type="text/javascript"></script>
	 </body>
	 </html>