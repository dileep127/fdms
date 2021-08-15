<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>LOGIN FORM:: w3layouts </title>
      <!-- Meta tags -->
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="Grass login & Sign up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
         />
      <script>
         addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
      </script>
      <!-- Meta tags -->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//style sheet end here-->
      <link href="//fonts.googleapis.com/css?family=Barlow:300,400,500" rel="stylesheet">
   </head>
   <body>
      <h1 class="header-w3ls">
        FOREST LOGIN
      </h1>
      <div class="art-bothside">
         <div class="sap_tabs">
            <div id="horizontalTab">
              <li class="resp-tab-item"></li>
             
               </ul>
               <div class="clearfix"> </div>
               <div class="resp-tabs-container">
                  <div class="tab-1 resp-tab-content">
                     <div class="swm-right-w3ls">
                        <form action="logcheck.php" method="post">
                           <div class="main">
                              <div class="icon-head-wthree">
                                 <h2>Login Here</h2>
                              </div>
                              <div class="form-left-w3l">
                                 <input type="email" name="email" placeholder="type admin@gmail.com to demo login" required="" >
                              </div>
                              <div class="form-right-w3ls ">
                                 <input type="password" name="password" placeholder="Password is 12345" required="">
                              </div>
                              <div class="btnn">
                                 <button type="submit">LogIn</button><br>
                                 <a href="forgot_password.php" class="for">Forgot password...?</a>  
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="tab-1 resp-tab-content">
                     <div class="swm-left-w3ls">
                        <form action="#" method="post">
                           <div class="main">
                              <div class="icon-head-wthree">
                                 <h2>Sing Up Here</h2>
                              </div>
                              <div class="form-left-to-w3l">
                                 <input type="text" name="name" placeholder="Name" required="">
                              </div>
                              <div class="form-left-w3l">
                                 <input type="email" name="email" placeholder="Email" required="">
                              </div>
                              <div class="form-right-w3ls ">
                                 <input type="password" name="password" placeholder="Password" required="">
                              </div>
                              <div class="btnn">
                                 <button type="submit">Sign Up</button><br>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
           </div>
         </div>
      </div>
      <div class="social-icons">
         <ul>
            <li>
               <a href="#">
               <span class="fab fa-facebook-f"></span>
               </a>
            </li>
            <li>
               <a href="#">
               <span class="fab fa-google-plus-g"></span>
               </a>
            </li>
            <li>
               <a href="#">
               <span class="fab fa-twitter"></span>
               </a>
            </li>
         </ul>
      </div>
      <div class="copy">
         <p>&copy;2018 Grass login & Sign up Form. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a></p>
      </div>
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <script src="js/easyResponsiveTabs.js"></script>
      <script>
         $(document).ready(function () {
         	$('#horizontalTab').easyResponsiveTabs({
         		type: 'default', //Types: default, vertical, accordion           
         		width: 'auto', //auto or any width like 600px
         		fit: true // 100% fit in a container
         	});
         });
      </script>
   </body>
</html>