
 <div class="modal fade login" id="loginModal">
              <div class="modal-dialog login animated">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                       <img src="../images/logoproduct.jpg" style="width: 50%;margin-left: 90px;">
                           <div class="social " style="padding: 24px;margin-left: 36%;">
                                <!--    <div class="g-signin2" data-onsuccess="onSignIn"></div> -->
                                  <a class="login " href='<?php echo $authUrl; ?>'>
                                    <img class="login zoom" src="img/google.png" style="width: 3rem;" />
                                  </a>
                                </div>
                      <div class="division">
                                    <div class="line l"></div>
                                      <span>or</span>
                                    <div class="line r"></div>
                                </div>
                             

                       
                    <div class="modal-body">
                        <div class="box">
                             <div class="content">
                                <div class="error"></div>
                                <div class="form loginBox login100-form validate-form">
                                    <form method="post" id="loginform" action="login.php" accept-charset="UTF-8">
                                       
                                          
                       <input id="email" class="form-control effect-1 input100" type="text" placeholder="Enter Email" name="email">
                      
                                   
                                    <input id="password" class="form-control effect-1 input100" type="password" placeholder="Enter Password" name="password">
                <input class="btn btn-default btn-login btn-grad" type="submit" id="login" name="login" value="Login"  name="login" style="margin-left: 25%;">
                    
                                    </form>
                                    <div id="ack"></div>
                                </div>
                             </div>
                             
                              
                        </div>
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                                <form method="post" html="{:multipart=>true}" data-remote="true" action="login.php" accept-charset="UTF-8">
         
                                <input id="name" class="form-control effect-1" type="text" placeholder="Full Name" name="name" required="required">
             
                                <input id="phone" class="form-control effect-1" type="text" placeholder="Phone No" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required="required">
                          
                                <input id="email" class="form-control " type="text" placeholder="Email" name="email" required="required">
                              <select id="gender"  class="form-control selectform" name="gender">
                                  <option class="lt" value="" >Gender</option>
                                <option class="lt"value="Male">Male</option>
                                         <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                    </select>
                                 <div style="display: flex; align-items: center;">
                                            <input id="password-field" type="password" class="form-control" name="password" value="" placeholder="Password">
              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" style="position: absolute;"></span>
                                   </div>
                                <input class="btn btn-default btn-register btn-grad" type="submit" name="reg_user" value="Create account" style="margin-left: 15%;">
                                </form>
                             <!--     <span id='message'></span> -->
                                </div>
                            </div>
                               <div class="division">
                                    <div class="line l"></div>
                                      <span>Follow Us</span>
                                    <div class="line r"></div>
                                </div>
                      <div class="social" style="">
                                  <a id="facebook_login" class="zoom" style="display: inline-block;" href="https://www.facebook.com/marketingojo.products" target="_blank">
                                         <img class='login' src="img/facebook.png" style="width: 4rem;" />
                                    </a>
                                   <a id="facebook_login"  class="zoom" style="display: inline-block;" href="https://www.instagram.com/marketingojo.products/" target="_blank">
                                        <img class='login' src="img/instagram.png" style="width: 4rem;" />
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
<div class="modal fade" id="photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                 <h6 class="modal-title"><b><span class="name">Add and Photo of your Choose in a Pdf Formate.</span></b></h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
           
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="address.php" enctype="multipart/form-data">
                <input type="hidden" class="proid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" class="form-control" name="photo" required>
                    </div>
                </div>
            
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="model">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title"><b><span class="name">Select Company and Model of Your Phone.</span></b></h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
             
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="address.php" enctype="multipart/form-data">
                <input type="hidden"  class="proid" name="id">
            <div class="form-group row" style="margin-top:5px;">
               
                   <label for="category" class="col-sm-2 control-label">Company</label>
                     <div class="col-sm-4">
                    <select class="form-control" id="mobile" name="mobile" required>
                      <option value="" selected>- Select -</option>

                      <option value="Apple" >Apple</option>
                      <option value="Samsung" >Samsung</option>
                      <option value="Google" >Google</option>
                          <option value="Huawei" >Huawei</option>
                           <option value="OnePlus" >OnePlus</option>
                      <option value="Xiaomi" >Xiaomi</option>
                      <option value="LG" >LG</option>
                          <option value="Oppo" >Oppo</option>
                          <option value="Vivo" >Vivo</option>
                          <option value="Nokia" >Nokia</option>
                    </select>
                  </div>
                    <label for="photo" class="col-sm-1 control-label" style="margin-top:2px;margin-left: -15px;margin-right: 10px;">Model</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="model" name="model">
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="custmtext">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
   <h6 class="modal-title"><b><span class="name">Add Text You want to Design.</span></b></h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
           
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="address.php" enctype="multipart/form-data">
                <input type="hidden"  class="proid" name="id">
            <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Text</label>

                    <div class="col-sm-9">
                      <textarea id="text"  class="form-control" name="text" required>
                        
                      </textarea>
                    
                    </div>
                </div>
               
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addfile">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
   <h6 class="modal-title"><b><span class="name">Warning!</span></b></h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
           
            </div>
            <div class="modal-body" style="padding: 22px 15px;">
              <h5><span>Add Custome File for All the Products.</span></h5>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Okay</button>
             
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="address">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                 <h6 class="modal-title"><b><span class="name">Add New Address</span></b></h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
           
            </div>
            <div class="modal-body">
           <form class="form-horizontal" method="POST" action="address.php">
            <fieldset>
                <!-- Address form -->
                <!-- full-name input-->
                <input type="hidden" name="userid" value='<?php echo $_SESSION['userId'];?>'>
                <div class=".form-control">
                    <label class="control-label">Full Name</label>
                    <div class="controls">
                        <input id="full-name" name="name" type="text" placeholder="full name"
                        class="input-xlarge" required="required">
                        <p class="help-block"></p>
                    </div>
                </div>
                 <div class=".form-control">
                    <label class="control-label">Phone No:</label>
                    <div class="controls">
                        <input id="full-name" name="phone" type="text" placeholder="Phone No:"
                        class="input-xlarge" required="required">
                        <p class="help-block"></p>
                    </div>
                </div>
                <!-- address-line1 input-->
                <div class="control-group">
                    <label class="control-label">Address Line 1</label>
                    <div class="controls">
                        <input id="address-line1" name="addressl1" type="text" placeholder="address line 1"
                        class="input-xlarge" required="required">
                        <p class="help-block">Street address, P.O. box, company name, c/o</p>
                    </div>
                </div>
                <!-- address-line2 input-->
                <div class="control-group">
                    <label class="control-label">Address Line 2</label>
                    <div class="controls">
                        <input id="address-line2" name="addressl2" type="text" placeholder="address line 2"
                        class="input-xlarge" required="required">
                        <p class="help-block">Apartment, suite , unit, building, floor, etc.</p>
                    </div>
                </div>
                <!-- city input-->
                <div class="control-group">
                    <label class="control-label">City / Town</label>
                    <div class="controls">
                        <input id="city" name="city" type="text" placeholder="city" class="input-xlarge" required="required">
                        <p class="help-block"></p>
                    </div>
                </div>
                <!-- region input-->
                <div class="control-group">
                    <label class="control-label">State / Province / Region</label>
                    <div class="controls">
                        <input id="region" name="state" type="text" placeholder="state / province / region"
                        class="input-xlarge" required="required">
                        <p class="help-block"></p>
                    </div>
                </div>
                <!-- postal-code input-->
                <div class="control-group">
                    <label class="control-label">Zip / Postal Code</label>
                    <div class="controls">
                        <input id="postal-code" name="pin" type="text" placeholder="zip or postal code"
                        class="input-xlarge" required="required">
                        <p class="help-block"></p>
                    </div>
                </div>
                <!-- country select -->
                <div class="control-group">
                    <label class="control-label">Country</label>
                    <div class="controls">
                   <input id="country" name="country"  type="text" placeholder="Country"
                        class="input-xlarge" required="required">
                      
                    </div>
                </div>
            </fieldset>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="address"><i class="fa fa-check-square-o"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteAdd">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
   <h6 class="modal-title"><b><span class="name">Warning!</span></b></h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
           
            </div>
            <div class="modal-body" style="padding: 22px 15px;">
              <h5><span>Are You Sure You Wanna Delete??</span></h5>
              <form method="POST" action="address.php">
                 <input type="hidden" class="addressid" name="id">
          
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="deleteadd"><i class="fa fa-check-square-o"></i>Yes</button>
                  </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editaddress">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                 <h6 class="modal-title"><b><span class="name">Edit Address</span></b></h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
           
            </div>
            <div class="modal-body">

           <form class="form-horizontal" method="POST" action="address.php">
            
            <fieldset>
                <!-- Address form -->
                <!-- full-name input-->
                <input type="hidden" name="userid" value='<?php echo $_SESSION['userId'];?>'>
                <div class=".form-control">
                    <label class="control-label">Full Name</label>
                    <div class="controls">
                        <input id="full-name"name="name" type="text" placeholder="full name"
                        class="input-xlarge name">
                        <p class="help-block"></p>
                    </div>
                </div>
                 <div class=".form-control">
                    <label class="control-label">Phone No:</label>
                    <div class="controls">
                        <input id="phone" name="phone" type="text" placeholder="Phone No:"
                        class="input-xlarge">
                        <p class="help-block"></p>
                    </div>
                </div>
                <!-- address-line1 input-->
                <div class="control-group">
                    <label class="control-label">Address Line 1</label>
                    <div class="controls">
                        <input id="address-line1" name="addressl1" type="text" placeholder="address line 1"
                        class="input-xlarge">
                        <p class="help-block">Street address, P.O. box, company name, c/o</p>
                    </div>
                </div>
                <!-- address-line2 input-->
                <div class="control-group">
                    <label class="control-label">Address Line 2</label>
                    <div class="controls">
                        <input id="address-line2" name="addressl2" type="text" placeholder="address line 2"
                        class="input-xlarge">
                        <p class="help-block">Apartment, suite , unit, building, floor, etc.</p>
                    </div>
                </div>
                <!-- city input-->
                <div class="control-group">
                    <label class="control-label">City / Town</label>
                    <div class="controls">
                        <input id="city" name="city" type="text" placeholder="city" class="input-xlarge">
                        <p class="help-block"></p>
                    </div>
                </div>
                <!-- region input-->
                <div class="control-group">
                    <label class="control-label">State / Province / Region</label>
                    <div class="controls">
                        <input id="region" name="state" type="text" placeholder="state / province / region"
                        class="input-xlarge">
                        <p class="help-block"></p>
                    </div>
                </div>
                <!-- postal-code input-->
                <div class="control-group">
                    <label class="control-label">Zip / Postal Code</label>
                    <div class="controls">
                        <input id="postal-code" name="postal-code" type="text" placeholder="zip or postal code"
                        class="input-xlarge">
                        <p class="help-block"></p>
                    </div>
                </div>
                <!-- country select -->
                <div class="control-group">
                    <label class="control-label">Country</label>
                    <div class="controls">
                   <input id="country" name="country"  type="text" placeholder="Country"
                        class="input-xlarge">
                      
                    </div>
                </div>
            </fieldset>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="address"><i class="fa fa-check-square-o"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>