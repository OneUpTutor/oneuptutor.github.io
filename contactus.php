<?php session_start();

if(!isset($_GET['success'])){ session_destroy();}
if(!isset($_GET['error'])){ session_destroy();}
 ?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Contact</title>
    <meta charset="utf-8">
    <link rel="icon" href="images/fav.png" type="image/x-icon">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords">
    <meta name="google-site-verification" content="sGbNvjQCVM737MBE2jzMQy80HCZYDIzEa56Pbud9rOU" />
    
   
    <script src="js/main.js"></script><link rel="icon" href="" type="image/x-icon">
    <!-- Stylesheets-->
    
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
   
    <!-- Page-->
    <div class="page text-center" >
      <!-- Page Header-->
      <header class="page-head">
        <!-- RD Navbar Default-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="210px" data-xl-stick-up-offset="210px" data-xxl-stick-up-offset="210px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                <h4 class="panel-title d-lg-none">Contact Us</h4>
                <!-- RD Navbar Right Side Toggle-->
                <button class="rd-navbar-top-panel-toggle d-lg-none" data-rd-navbar-toggle=".rd-navbar-top-panel"><span></span></button>
               
              </div>
              <div class="rd-navbar-menu-wrap clearfix">
                <!--Navbar Brand-->
                <div class="rd-navbar-brand"><a class="d-inline-block" href="https://oneuptutor.github.io/"><img class="d-none d-xxl-inline-block" src="images/81x119.png" width="199" height="70" alt=""/><img class="d-xxl-none" src="images/81x119.png" width="81" height="119" alt=""/></a></div>
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <div class="rd-navbar-mobile-header-wrap">
                      <!--Navbar Brand Mobile-->
                      <div class="rd-navbar-mobile-brand"><a href="https://oneuptutor.github.io/"><img width='130' height='130' src='images/130x130.png' alt=''/></a></div>
                    </div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class=""><a href="https://oneuptutor.github.io/">Home</a>
                      </li>
					  <li class=""><a href="https://oneuptutor.github.io/about.html">About</a>
                      </li>
                     
					  <li class=""><a href="https://oneuptutor.github.io/video.html">Video</a>
                      </li>
                       <li class=""><a href="https://oneuptutor.github.io/pricing.html"> Our Pricing</a>
					 
                        
                      </li>
                      <li><a href="https://oneuptutor.github.io/courses.html">Courses</a>
					
                        
                      </li>
                      <li class="active"><a href="https://oneuptutor.github.io/contactus.php">Contact Us</a>
                       
                      </li>
                      
                     
                     
                    </ul>
                    <!--RD Navbar Mobile Search-->
                  
                  </div>
                </div>
                <!--RD Navbar Search-->
               
                <!--RD Navbar shop-->
               
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Classic Breadcrumbs-->
    
      <section class="section-70 section-lg-114" 
      style="background-image: url(images/bg-index-body.jpg);">
        <div class="container">
          <div class="row row-65 justify-content-sm-center">
            <div class="col-sm-10 col-lg-8 text-lg-left">
              <h2 class="font-weight-bold">What I should know about you</h2>
              <div class="hr-md-left-0"></div>
              <p class="form-message <?php echo $_SESSION['cls']; ?>"><?php echo $_SESSION['msg']; ?></p>
              <div class="offset-top-30 offset-lg-top-60">
                
              </div>
             <div class="offset-top-30">
                <form class="rd-mailform text-left"  name="contactform"  method="post" id="reused_form" action="action.php">
                  <div class="row row-12">
                    <div class="col-xl-6">
                      <div class="form-wrap">
                        <label class="form-label form-label-outside rd-input-label" for="contact-me-name">First name</label>
                        <input class="form-input form-control-has-validation form-control-last-child"  id="firstname" name="firstname" data-constraints="@Required"><span class="form-validation"></span>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="form-wrap">
                        <label class="form-label form-label-outside rd-input-label" for="contact-me-last-name">Last name</label>
                        <input class="form-input form-control-has-validation form-control-last-child" id="contact-me-last-name" type="text" name="last-name" data-constraints="@Required"><span class="form-validation"></span>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="form-wrap">
                        <label class="form-label form-label-outside rd-input-label" for="contact-me-email">E-mail</label>
                        <input class="form-input form-control-has-validation form-control-last-child" id="email" name="email"  data-constraints="@Required @Email"><span class="form-validation"></span>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="form-wrap">
                        <label class="form-label form-label-outside rd-input-label" for="contact-me-phone">Phone</label>
                        <input class="form-input form-control-has-validation form-control-last-child" id="phone" name="phone" data-constraints="@Numeric"><span class="form-validation"></span>
                      </div>
                    </div>
                    <div class="col-xl-12">
                      <div class="form-wrap">
                        <label class="form-label form-label-outside rd-input-label" for="contact-me-message">Message</label>
                        <textarea class="form-input form-control-has-validation form-control-last-child" id="message" name="message" data-constraints="@Required" style="height: 220px"></textarea><span class="form-validation"></span>
                      </div>
                    </div>
                  </div>
                  <div class="text-center text-xl-left offset-top-20">
                    <button class="btn btn-ellipse btn-primary"id="btnContactUs" type="submit">Send Message</button>
                  </div>
                  <div class="text-center text-xl-left offset-top-20">
                    <button class="btn btn-ellipse btn-primary"> <a href="Student info.pdf" onMouseOver="this.style.color='#fff'"
   onMouseOut="this.style.color='#fff'">Student Information Form</a></button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-sm-10 col-lg-4 text-left">
              <div class="inset-lg-left-30">
                <div class="row row-30 row-lg-60">
                  <div class="col-sm-12">
                    <h6 class="font-weight-bold">Socials</h6>
                    <div class="hr bg-gray-light offset-top-10"></div>
                    <ul class="list-inline list-inline-xs list-inline-madison">
                 <li><a class="icon icon-xxs fa-facebook icon-circle icon-gray-light-filled view-animate zoomInSmall delay-04" target="_blank" href="https://www.facebook.com/oneuptutor.raj.5"></a></li>
                <li><a class="icon icon-xxs fa-twitter icon-circle icon-gray-light-filled view-animate zoomInSmall delay-06" target="_blank" href="https://twitter.com/bhatt77841"></a></li>
                <li><a class="icon icon-xxs fa-youtube-play icon-circle icon-gray-light-filled view-animate zoomInSmall delay-08" href="https://www.youtube.com/results?search_query=oneuptutor" target="_blank" onMouseOver="this.style.color='red';this.style.background='white'" onMouseOut="this.style.color='#888';this.style.background='#e5e5e5'" 
   ></a></li>
                  <li><a class="icon icon-xxs fa-linkedin icon-circle icon-gray-light-filled view-animate zoomInSmall delay-1" target="_blank" href="#"></a></li>
                </ul>
                  </div>
                  <div class="col-sm-12">
                    <h6 class="font-weight-bold">Phones</h6>
                    <div>
                      <div class="hr bg-gray-light offset-top-10"></div>
                    </div>
                    <div class="offset-top-15">
                      <ul class="list list-unstyled">
                        <li><span class="icon icon-xs text-madison mdi mdi-phone text-middle"></span><a class="text-middle inset-left-10 text-dark" href="tel:+1(979)-571-8976">+1(979)-571-8976</a></li>
                        
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <h6 class="font-weight-bold">E-mail</h6>
                    <div>
                      <div class="hr bg-gray-light offset-top-10"></div>
                    </div>
                    <div class="offset-top-15">
                      <ul class="list list-unstyled">
                        <li><span class="icon icon-xs text-madison mdi mdi-email-outline text-middle"></span><a class="text-primary text-middle inset-left-10" href="mailto:oneuptutor.raj@gmail.com"><span class="__cf_email__" data-cfemail="99f0f7fff6d9fdfcf4f6f5f0f7f2b7f6ebfe">[email&#160;:oneuptutor.raj@gmail.com]</span></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <h6 class="font-weight-bold">Address</h6>
                    <div>
                      <div class="hr bg-gray-light offset-top-10"></div>
                    </div>
                    <div class="offset-top-15">
                      <div class="unit flex-row unit-spacing-xs">
                        <div class="unit-left"><span class="icon icon-xs mdi mdi-map-marker text-madison"></span></div>
                        <div class="unit-body">
                          <p><a class="text-dark" href="#">I tutor in
Texas A & M University Library and surrounding area</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Google Map-->
     
      <!-- Page Footer-->
      <!-- Corporate footer-->
       <footer class="page-footer">
        <div class="container container-wide">
          <div class="hr bg-gray-light"></div>
        </div>
        <div class="container section-60">
          <div class="row row-50 justify-content-xl-between justify-content-sm-center">
            <div class="col-lg-3 col-xl-2">
              <!--Footer brand--><a class="d-inline-block" href="https://oneuptutor.github.io/"><img width="163" height="225" src="images/163x225.png" alt=""></a>
            </div>
            <div class="col-sm-10 col-lg-5 col-xl-4 text-xl-left">
              <h6 class="font-weight-bold">Contact us</h6>
              <div class="text-subline"></div>
              <div class="offset-top-30">
                <ul class="list-unstyled contact-info list">
                  <li>
                    <div class="unit flex-row align-items-center unit-spacing-xs">
                      <div class="unit-left"><span class="icon mdi mdi-phone text-middle icon-xs text-madison"></span></div>
                      <div class="unit-body"><a class="d-block d-lg-inline-block text-dark" href="tel:+1(979)-571-8976">+1(979)-571-8976</a>
                      </div>
                    </div>
                  </li>
                  <li class="offset-top-15">
                    <div class="unit flex-row align-items-center unit-spacing-xs">
                      <div class="unit-left"><span class="icon mdi mdi-map-marker text-middle icon-xs text-madison"></span></div>
                      <div class="unit-body text-left"><a class="text-dark" href="#">I tutor in
Texas A & M University Library and surrounding area</a></div>
                    </div>
                  </li>
                  <li class="offset-top-15">
                    <div class="unit flex-row align-items-center unit-spacing-xs">
                      <div class="unit-left"><span class="icon mdi mdi-email-open text-middle icon-xs text-madison"></span></div>
                      <div class="unit-body"><a href="mailto:oneuptutor.raj@gmail.com"><span class="__cf_email__" data-cfemail="771e1911183713121a181b1e191c59180510">[email&#160;: oneuptutor.raj@gmail.com]</span></a></div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="offset-top-15 text-left">
                <ul class="list-inline list-inline-xs list-inline-madison">
                 <li><a class="icon icon-xxs fa-facebook icon-circle icon-gray-light-filled view-animate zoomInSmall delay-04" href="https://www.facebook.com/?sk=welcome"></a></li>
                <li><a class="icon icon-xxs fa-twitter icon-circle icon-gray-light-filled view-animate zoomInSmall delay-06" href="https://twitter.com/bhatt77841"></a></li>
                <li><a class="icon icon-xxs fa-youtube-play icon-circle icon-gray-light-filled view-animate zoomInSmall delay-08" href="https://www.youtube.com/results?search_query=oneuptutor" onMouseOver="this.style.color='red';this.style.background='white' "onMouseOut="this.style.color='#888';this.style.background='#e5e5e5'" 
   ></a></li>
                  <li><a class="icon icon-xxs fa-linkedin icon-circle icon-gray-light-filled view-animate zoomInSmall delay-1" href="https://www.linkedin.com/in/rajanikant-bhatt-331b0018/"></a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-10 col-lg-8 col-xl-4 text-xl-left">
              <h6 class="font-weight-bold">Newsletter</h6>
              <div class="text-subline"></div>
              <div class="offset-top-30 text-left">
                <p>Enter your email address to get the latest news, special events and activities delivered right to your inbox.</p>
              </div>
              <div class="offset-top-10">
                      <form class="rd-mailform form-subscribe" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                        <div class="form-wrap">
                          <input class="form-input form-input-sm" placeholder="Your e-mail" type="email" name="email" data-constraints="@Required @Email">
                        </div>
                        <div class="form-button">
                          <button class="btn btn-sm btn-primary btn-ellipse" type="submit">Subscribe</button>
                        </div>
                      </form>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-madison context-dark">
          <div class="container text-lg-left section-15">
            <p class="rights">&copy; <span class="copyright-year"></span>. All Rights Reserved. <a href="">Privacy Policy</a></p>
            <p class="rights">Design By <a href=""></a></p>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Java script-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>