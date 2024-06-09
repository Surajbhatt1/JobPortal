<!DOCTYPE html>
<html lang="en">
<head>

     <center><h1>Login Page</h1></center>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="<?php base_url();?>assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="<?php base_url();?>assets/css/font-awesome.min.css">
     <link rel="stylesheet" href="<?php base_url();?>assets/css/owl.carousel.css">
     <link rel="stylesheet" href="<?php base_url();?>assets/css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="<?php base_url();?>assets/css/style.css">

</head>

	<body>


<!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">Online Job Portal</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li ><a href="<?php echo site_url('Home')?>">Home</a></li>
                       <!--   <li><a href="job-listing.html">Jobs</a></li> -->
                         <!-- <li><a href="<?php echo site_url('Logout')?>">Logout</a></li> -->
                         <li><a href="<?php echo site_url('Aboutus')?>">About Us</a></li>
                         <li><a href="<?php echo site_url('Signup')?>">Signup</a></li>
                         <li class="active"><a href="<?php echo site_url('Login')?>">Login</a></li>
                     <!--      <li><a href="<?php echo site_url('Terms')?>">Terms</a></li> -->
                         <!-- <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
                              
                              <ul class="dropdown-menu">
                                   <li><a href="team.html">Team</a></li>
                                   <li><a href="testimonials.html">Testimonials</a></li>
                                   <li><a href="terms.html">Terms</a></li>
                              </ul>
                         </li> -->
                        <li><a href="<?php echo site_url('Contact')?>">Contact Us</a></li>
                    </ul>
               </div>

          </div>
     </section>
     <div class="container">
 	<form method="POST" action=Login/get>
     <center>
     <table>
          <tr>
          <td>
 		       <label for="u_email">Email:</label>
          </td>
          <td>
 		       <input type="text" id="u_email" name="u_email" value="">
          </td>
          </tr>
          <tr><td><br></td></tr>

          <tr>
          <td>
 		        <label for="u_pass">Password:</label>
          </td>
          <td>
 		        <input type="Password" id="u_pass" name="u_pass" value="">
          </td>
          </tr>
          <tr><td><br></td></tr>

          <tr>
          <td></td>
          <td>
 		       <input type="submit" value="Login">
          </td>
          </tr>
     </table>
     </center>
	</form>
</div>


	<!-- FOOTER -->
          <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Headquarter</h2>
                              </div>
                              <address>
                                   <p>B/717 Near Althan,Surat <br>India, 394221</p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>

                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2021 <br>Online Job Portal</p>
                                 <!--   <p>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p> -->
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p>+91 8551946807</p>
                                   <p><a href="mailto:Jobs@company.com">Jobs@company.com</a></p>
                              </address>

                              <div class="footer_menu">
                                   <h2>Quick Links</h2>
                                   <ul>
                                        <li><a href="<?php echo site_url('Home')?>">Home</a></li>
                                        <li><a href="<?php echo site_url('Aboutus')?>">About Us</a></li><br>
                                  <!--       <li><a href="<?php echo site_url('Terms')?>">Terms & Conditions</a></li> -->
                                        <li><a href="<?php echo site_url('Contact')?>">Contact Us</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <!-- <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Newsletter Signup</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="#" method="get">
                                             <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email" required>
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Send me">
                                        </form>
                                        <span><sup>*</sup> Please note - we do not spam your email.</span>
                                   </div>
                              </div>
                         </div>
                    </div> -->
                    
               </div>
          </div>
     </footer>

          
           <!-- SCRIPTS -->
     <script src="<?php base_url();?>assets/js/jquery.js"></script>
     <script src="<?php base_url();?>assets/js/bootstrap.min.js"></script>
     <script src="<?php base_url();?>assets/js/owl.carousel.min.js"></script>
     <script src="<?php base_url();?>assets/js/smoothscroll.js"></script>
     <script src="<?php base_url();?>assets/js/custom.js"></script>
	</body>
</html>

