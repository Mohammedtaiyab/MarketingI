
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

                
                                          
                       <input id="email" class="form-control effect-1 input100" type="text" placeholder="Enter Email" name="email">
                      
                                   
                                    <input id="password" class="form-control effect-1 input100" type="password" placeholder="Enter Password" name="password">
                <input class="btn btn-default btn-login btn-grad" type="submit" value="Login"  name="login_user" onclick="loginAjax()" style="margin-left: 25%;">
                    
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
         
                                <input id="name" class="form-control effect-1" type="text" placeholder="Enter Name" name="name" required="required">
             
                                <input id="phone" class="form-control effect-1" type="text" placeholder="Enter Phone No" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required="required">
                          
                                <input id="email" class="form-control " type="text" placeholder="Enter Email" name="email" required="required">
                             
                                 <div style="display: flex; align-items: center;">
                                            <input id="password-field" type="password" class="form-control" name="password" value="" placeholder="Enter Password">
              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" style="position: absolute;"></span>
                                   </div>
                                <input class="btn btn-default btn-register btn-grad" type="submit" name="reg_user" value="Create account" style="margin-left: 15%;">
                                </form>
                             <!--     <span id='message'></span> -->
                                </div>
                            </div>
                      
                       <!--    <div class="division">
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
                                </div>   -->
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