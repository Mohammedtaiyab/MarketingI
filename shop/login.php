<?php
require('header.php');


// $login_button = '';


// if(isset($_GET["code"]))
// {

//  $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


//  if(!isset($token['error']))
//  {
 
//   $google_client->setAccessToken($token['access_token']);

 
//   $_SESSION['access_token'] = $token['access_token'];


//   $google_service = new Google_Service_Oauth2($google_client);

 
//   $data = $google_service->userinfo->get();

 
//   if(!empty($data['given_name']))
//   {
//    $_SESSION['user_first_name'] = $data['given_name'];
//   }

//   if(!empty($data['family_name']))
//   {
//    $_SESSION['user_last_name'] = $data['family_name'];
//   }

//   if(!empty($data['email']))
//   {
//    $_SESSION['user_email_address'] = $data['email'];
//   }

//   if(!empty($data['gender']))
//   {
//    $_SESSION['user_gender'] = $data['gender'];
//   }

//   if(!empty($data['picture']))
//   {
//    $_SESSION['user_image'] = $data['picture'];
//   }
//  }
// }


// if(!isset($_SESSION['access_token']))
// {

//  $login_button = '<a href="'.$google_client->createAuthUrl().'">Login With Google</a>';
// }
?>

  <!-- breadcrumb-section start -->
    <div class="breadcrumb-section mb-30 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent">
                            <li class="breadcrumb-item"><a href="index.html" class="text-uppercase">Home</a></li>
                            <li class="breadcrumb-item active"><a href="login.html" class="text-uppercase">login</a></li>
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
                    <h3 class="title"> Log in to your account</h3>
                       <div class="social">
                                  <div class="panel panel-default">
                                    <?php include('error.php'); ?>
   <?php
   // if($login_button == '')
   // {
   //  echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
   //  echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
   //  echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
   //  echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
   //  echo '<h3><a href="?logout">Logout</h3></div>';
   // }
   // else
   // {
   //  echo '<div align="center">'.$login_button . '</div>';
   // }
   ?>
   </div>
                                   <!--  <a id="google_login" class="circle google" href="#">
                                        <i class="fa fa-google-plus fa-fw"></i>
                                    </a>
                                   -->
                                </div>
                    <form class="log-in-form" method="post" action="login.php">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" id="staticEmail">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-md-3 col-form-label">Password</label>
                            <div class="col-md-6">
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="password" name="password" class="form-control" id="inputPassword">
                                    <div class="input-group-prepend">
                                        <button type="button" class="input-group-text show-password">show</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="form-group row text-center">
                            <div class="col-md-6 offset-md-3">
                                <div class="login-form-links">
                                    <a href="#" class="for-get">Forgot your password?</a>
                                    <div class="sign-btn">
                                        <button type="submit" class="btn-success mt-0" name="login_user">Log In</button>
                              
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0 text-center">
                            <div class="col-12">
                                <div class="border-top">
                                    <a href="#" class="no-account">No account? Create one here</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
require('footer.php');
?>