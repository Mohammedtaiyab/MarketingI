

 <div class="modal fade login" id="loginModal">
              <div class="modal-dialog login animated">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="box">
                             <div class="content">
                               
                                <div class="error"></div>
                                <div class="form loginBox login100-form validate-form">
                                    <form method="post" action="" accept-charset="UTF-8">
                                        <span class="login100-form-title p-b-49">
                        Login
                    </span>

                
                                            <span class="label-input100">Email</span>
                       <input id="email" class="form-control effect-1 input100" type="text" placeholder="Enter Your Email" name="email">
                      
                                      <span class="label-input100">Password</span>
                                    <input id="password" class="form-control effect-1 input100" type="password" placeholder="Enter Your Password" name="password">
                <input class="btn btn-default btn-login btn-grad" type="submit" value="Login"  name="login_user" onclick="loginAjax()">
                    
                                    </form>
                                </div>
                             </div>
                             
                              
                        </div>
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                                <form method="post" html="{:multipart=>true}" data-remote="true" action="" accept-charset="UTF-8">
                                     <span class="login100-form-title p-b-49">
                     Sign Up!
                    </span>
                         <span class="label-input100">Name</span>
                                <input id="name" class="form-control effect-1" type="text" placeholder="Enter Your Name" name="name" required="required">
                                 <span class="label-input100">Phone No.</span>
                                <input id="phone" class="form-control effect-1" type="text" placeholder="Enter Phone Number" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required="required">
                                 <span class="label-input100">Email</span>
                                <input id="email" class="form-control " type="text" placeholder="Enter Your Email" name="email" required="required">
                                 <span class="label-input100">Password</span>
                                <input id="password" class="form-control" type="password" placeholder="Enter Password" name="password" required="required">
                                 <span class="label-input100">Confirm Password</span>
                                <input id="password_confirmation" class="form-control" type="password" placeholder="Confirm Password" name="password_confirmation" required="required">

                                <input class="btn btn-default btn-register btn-grad" type="submit" name="reg_user" value="Create account">
                                </form>
                                </div>
                            </div>
                      
                          <div class="division">
                                    <div class="line l"></div>
                                      <span>or</span>
                                    <div class="line r"></div>
                                </div>
                             

                         <div class="social">
                                    <a id="google_login" class="circle google" href="#">
                                        <i class="fa fa-google-plus fa-fw"></i>
                                    </a>
                                    <a id="facebook_login" class="circle facebook" href="#">
                                        <i class="fa fa-facebook fa-fw"></i>
                                    </a>
                                </div>  
                                  </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Looking to
                                 <a href="javascript: showRegisterForm();">create an account</a>
                            ?</span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                             <span>Already have an account?</span>
                             <a href="javascript: showLoginForm();">Login</a>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
    </div>

  <!-- footer start -->
    <footer>
        <!-- footer-top start -->
        <div class="footer-top bg-light-gray py-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-xl-4 mb-4 mb-xl-2">
                          <div class="single-widget address logo f">
                                  <img src="assets/img/logo.png" alt="" />
                                    <p>From Ideation & Consultation To Growing Your Business, All The Services You Can Ask For.</p>
                                    <ul class="list">
                                        <li><i class="fa fa-phone"></i> Phone:- <a href="">+91 9136773853 </a></li>
                                        <li><i class="fa fa-envelope"></i> Email:- <a href="">Info@MarketingOJO.com</a></li>
                                        <li><i class="fa fa-map-o"></i> Address:- <a href="">Pune, Maharastra</a></li>
                                    </ul>       
                                    <ul class="social">
                                    <li><a href="https://www.facebook.com/marketingojo"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.instagram.com/marketingojo/"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="https://wa.me/919136773853"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
                                    </ul>
                                </div>
                    </div>
                 
                    <div class="col-sm-6 col-xl-3 mb-4 mb-xl-2">
                        <div class="footer-widget">
                            <h3 class="title">Our company</h3>
                            <ul class="footer-menu">
                                <li>
                                    <a href="../index.html" class="d-flex align-items-end justify-content-between">
                                         Main Home
                                        </a>
                                </li>

                                <li>
                                    <a href="../Service.html" class="d-flex align-items-end justify-content-between">
                                            Services
                                           
                                        </a>
                                </li>
                                <li>
                                    <a href="../about-us.html" class="d-flex align-items-end justify-content-between">
                                            About Us
                                        </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex align-items-end justify-content-between">
                                         Contact Us
                                            
                                        </a>
                                </li>
                              
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-sm-8 col-xl-4">
                        <div class="footer-widget">
                            <h3 class="title">Product Tags</h3>
                            <ul class="product-tag d-flex flex-wrap">
                                <li><a href="#">Mobile Cover</a></li>
                                <li><a href="#">Key Chain</a></li>
                                <li><a href="#">Perfume</a></li>
                                <li><a href="#">Frame</a></li>
                                <li><a href="#">Bottles</a></li>
                                <li><a href="#">Gifts</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- footer-top end -->
        <!-- footer-bottom start -->
        <div class="footer-bottom bg-dark-light py-30">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <div class="payment text-center text-md-left">
                            <a href="#">
                                <img src="assets/img/payment/payment.png" alt="payment method" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="copyright text-center text-md-right">
                            <p>
                                &copy; Copyright
                                <a href="https://hasthemes.com/">MarketingOJO</a>. All Rights Reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom end -->
    </footer>
    <!-- footer end -->
    <!-- search-box and overlay- -->
    <div class="overlay">
        <div class="scale"></div>
        <form class="search-box" action="#">
            <input type="text" name="search" placeholder="Search Product" />
            <button id="close" type="submit"><i class="fa fa-search"></i></button>
        </form>
        <button class="close"><i class="fas fa-times-circle"></i></button>
    </div>
    <!-- search-box and overlay end -->
    <!-- scrollUp -->
    <a id="scrollUp" href="#"><i class="fas fa-arrow-up"></i></a>
    <!-- Button trigger modal -->

   

    <!-- vendor min js -->
    <script src="assets/js/vendor/vendor.min.js"></script>
    <!-- plugins min js -->
    <script src="assets/js/plugins.min.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>

    <script src="login/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="login/assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="login/assets/js/login-register.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<!-- <script type="text/javascript">
    $(document).ready(function(){
        openLoginModal();
    });
</script> -->
</body>

</html>