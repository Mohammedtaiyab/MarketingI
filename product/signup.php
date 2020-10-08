<?php
require('header.php');
$msg='';

?>
  <!-- breadcrumb-section start -->
    <div class="breadcrumb-section mb-30 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent">
                            <li class="breadcrumb-item"><a href="index.html" class="text-uppercase">Home</a></li>
                            <li class="breadcrumb-item active"><a href="" class="text-uppercase">Sign Up</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-section end -->
    <!-- my-account start -->
    <div class="my-account pt-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="title">Fill Sign In Form</h3>
<div class="fb-login-button" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false" data-width=""></div>
                       <div class="social">
                                  <div class="panel panel-default">
                                     <?php include('error.php'); ?>
                                  </div>
                                </div>
                    <form class="log-in-form" action="signup.php" method="POST">
                     
                       <div class="form-group row">
                            <label for="staticEmail" class="col-md-3 col-form-label">Name</label>
                            <div class="col-md-6">
                                <input type="text"name="name" class="form-control" id="staticEmail"  required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" id="staticEmail"  required="required">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="staticEmail" class="col-md-3 col-form-label">Phone No:</label>
                            <div class="col-md-6">
                                <input type="text" name="contact" class="form-control" id="staticEmail" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-md-3 col-form-label">Password</label>
                            <div class="col-md-6">
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="password" name="password" class="form-control" id="inputPassword">
                                    <div class="input-group-prepend"  required="required">
                                        <button type="button"  class="input-group-text show-password">show</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="form-group row text-center">
                            <div class="col-md-6 offset-md-3">
                                <div class="login-form-links">
                                   <!--  <a href="#" class="for-get">Forgot your password?</a> -->
                                    <div class="sign-btn">
                                         <button  type="submit" name="reg_user" class="btn btn-success mt-0">Sign Up!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>


                  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0" nonce="nuiqLz2u"></script>
<?ph
require('footer.php');
?>