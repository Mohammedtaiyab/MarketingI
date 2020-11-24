
 <div class="modal fade login" id="loginModal">
              <div class="modal-dialog login animated">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                       <img src="../images/logoproduct.jpg" style="width: 50%;margin-left: 90px;">
                           <div class="social" style="padding: 24px;margin-left: 89px;">
                                   <div class="g-signin2" data-onsuccess="onSignIn"></div>
                                 
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
         
                                <input id="name" class="form-control effect-1" type="text" placeholder="Enter Full Name" name="name" required="required">
             
                                <input id="phone" class="form-control effect-1" type="text" placeholder="Enter Phone No" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required="required">
                          
                                <input id="email" class="form-control " type="text" placeholder="Enter Email" name="email" required="required">
                              <select id="gender"  class="form-control selectform" name="gender">
                                  <option class="lt" value="" >Gender</option>
                                <option class="lt"value="Male">Male</option>
                                         <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                    </select>
                                 <div style="display: flex; align-items: center;">
                                            <input id="password-field" type="password" class="form-control" name="password" value="" placeholder="Enter Password">
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
                                  <a id="facebook_login" class="circle facebook" href="https://www.facebook.com/marketingojo">
                                        <i class="fa fa-facebook fa-fw"></i>
                                    </a>
                                   <a id="facebook_login" class="circle facebook" href="https://www.instagram.com/marketingojo/">
                                        <i class="fa fa-instagram"></i>
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
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h6 class="modal-title"><b><span class="name">Add and Photo of your Choose in a Pdf Formate.</span></b></h6>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="products_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="prodid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" class="form-control" name="photo" required>
                    </div>
                </div>
            
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="model">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
               <h6 class="modal-title"><b><span class="name">Select Company and Model of Your Phone.</span></b></h6>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="products_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="prodid" name="id">
            <div class="form-group">
               
                   <label for="category" class="col-sm-2 control-label">Company</label>
                     <div class="col-sm-4">
                    <select class="form-control" id="qtytype" name="custmtype" required>
                      <option value="" selected>- Select -</option>

                      <option value="101" >Mobile Model</option>
                      <option value="102" >Custom Image</option>
                      <option value="103" >Custom Text</option>
                          <option value="100" >None</option>
                    </select>
                  </div>
                      <label for="photo" class="col-sm-1 control-label">Model</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="dealer" name="dealer">
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="custmtext">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h6 class="modal-title"><b><span class="name">Add Text You want to Design.</span></b></h6>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="products_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="prodid" name="id">
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
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>